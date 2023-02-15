const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');
const path = require('path');
const cors = require('cors');
const fs = require('fs');
const app = express();
var options = {
    key: fs.readFileSync('/etc/apache2/ssl1/bagpackar.in.key'),
    cert: fs.readFileSync('/etc/apache2/ssl1/df856b464c50d77.crt')
};
// const server = require('https').Server(options);
var server = require('https').createServer(options);
const moment = require('moment');
const io = require('socket.io')(server);
const morgan = require('morgan');
const chatModel = require('./Model/chatModel');
const FCM = require('fcm-push');
const nodemailer = require("nodemailer");
// var async = require('asyncawait/async');
//var await = require('asyncawait/await');
var serverKey = 'AAAA8WdQ1IA:APA91bH-nQvafeuAy25AL1ckX-voDLsSfyOTr6rjU69HUcvBUd4-KYLfAMl6LqQdeNoKal-Awpv-BM_paWRNAvklMA_u_-WeZOg3IrDualLHo2Vqp0ZOclfzD8IUl3Iyc6XM54rb3-Gw';
var fcm = new FCM(serverKey);
const {
    Users
} = require('./Utilities/users');
const users = new Users();
var qb = require('./Utilities/dbConfig').qb;
app.use(cors());
app.use(bodyParser.json({
    limit: '50mb'
}));
app.use(bodyParser.urlencoded({
    limit: '50mb',
    extended: true
}));
app.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
    res.setHeader('Access-Control-Allow-Credentials', true);
    next()
});
app.use(morgan("dev"));

//setup port for server
server.listen(3637, function() {
    console.log("Server now connected on port 3637.");
});




// =================Create Socket Connection =============== //
io.on('connection', function(socket) {
    io.clients((error, clients) => {
        if (error) throw error;
        console.log(clients);
    })

    // ========= Get Conversation List ============ //

    socket.on('conversationList', async function(data) {
        var socket_id = socket.id;
        await qb.set('socket_id', socket_id).set('chat_with', '0').where('user_id', data.user_id).update('bgpkr_users');
        chatModel.conversationList(data, (err, chatList) => {
         console.log("chatlist",chatList)

         if (err)
            io.sockets.to(socket.id).emit('error_callback', {
                "message": "error occur."
            });
        io.sockets.to(socket.id).emit('conversationList', {
         "result": chatList
     });
    });
    });


    // ================= Init Chat =============== //
    socket.on('initChat', async function(data) {
        console.log('socket connected',data);

        chatModel.updateSocket(data, socket.id, (err, dbData) => {
            if (err)
                console.log(err);
        });
    });

 //===============is typing event==================//

 socket.on('typing', async function(data) {   
    receiverInfo = await qb.select('socket_id').where('user_id', data.r_id).get('bgpkr_users');
    if (receiverInfo.length > 0 && receiverInfo[0].socket_id!=""){
      io.sockets.to(receiverInfo[0].socket_id).emit('typingMsg', {
        "result": data
    });
  }
})



    // ========= Get Chat List Between s_id and r_id ============ //
    socket.on('getChatList', function(data) {
      chatModel.updateReadStatus(data, (err, updateStatus) => {
        if (err)
            console.log("error", err);
    });
      chatModel.getChatList(data, (err, chatList) => {
        if (err)
            io.sockets.to(socket.id).emit('error_callback', {
                "message": "error occur."
            });
        io.sockets.to(socket.id).emit('getChatList', {
            "result": chatList
        });

        let newData = {
            'user_id': data.s_id
        }
        chatModel.conversationList(newData, (err, chatList1) => {           
         io.sockets.to(socket.id).emit('conversationList', {
            "result": chatList1
        });
     });
    });
  });




    // ================= Send Message =============== //
    socket.on('sendMessage', async function(data) {
        var result = "";
        console.log("data",data);
        data.date_added = moment(new Date).format("YYYY-MM-DD HH:mm:ss");
        data.is_removed = 'no';
        chatModel.getRecevierSocketData(data, async(err1, r_socketData) => {
            if (r_socketData.block_status == '1') {
                data.deleted_by = String(data.r_id);
            } else {
                data.deleted_by = '';
            }
   //===============send messge==============//
   chatModel.sendChatMessage(data, async(err, dbData) => {
       result.read_status = 'unread';
       if (dbData.read_status != data.r_id){
          result.read_status = 'read';
      } 
      result = data;
      result.r_id = data.r_id;
      result.id = dbData.insert_id;
      result.name = dbData.name;
  // console.log("check=====", result);
  if (err1) {
    io.sockets.to(socket.id).emit('error_callback', {
        "message": "error occur."
    });
}
if (r_socketData.chat_with == data.s_id && r_socketData.block_status == '0') {
    io.sockets.to(r_socketData.socket_id).emit('receiveMessage', {
        "result": result
    });
} else if (r_socketData.chat_with == 0 && r_socketData.block_status=='0' ) {
    console.log('Send Notification');
    var senderdata = await qb.select('name').where('user_id', data.s_id).get('bgpkr_users');                                 
    var receiverdata = await qb.select('device_type,device_token').where('user_id',data.r_id).where('chat_with','0').get('bgpkr_users');
    // console.log("receiverdata===>", receiverdata)
    if (receiverdata.length > 0){
        message = {
            'title':'Bagpackar',
            's_id': data.s_id,
            'r_id': data.r_id,
            'message': senderdata[0].name + ' has sent you a message.',
            'type': 'chat',
            'sender_name': senderdata[0].name
        };
        sendpush(receiverdata[0]['device_type'], receiverdata[0]['device_token'], message);
    }                    
}
    //==============emit=================//
    io.sockets.to(socket.id).emit('receiveMessage', {
        "result": result
    });
    //==============create new data user_id================//
    let newData = {
        'user_id': data.r_id
    }
        //============conversation list==================//
        chatModel.conversationList(newData, (err, chatList) => {         
         io.sockets.to(r_socketData.socket_id).emit('conversationList', {
            "result": chatList
        });
     });

   //=========sender emit conversation list==============//
   let newData1 = {
    'user_id': data.s_id
} 
chatModel.conversationList(newData1, (err, chatList) => {
 console.log()            
 io.sockets.to(socket.id).emit('conversationList', {
    "result": chatList
});
});

 //================send email function=================//
  if(data.type="simple"){
    setTimeout(async function(){
     var checkData = await qb.select('read_status').from('bgpkr_chat').where('id', dbData.insert_id).get();
     console.log("checkData",checkData)
     if(checkData[0].read_status!=""){
      SendMail(data.s_id,data.r_id);
  }
}, 60000);
} 


//======end sender data=============//
});
});




});//========end send msg===============//

    // ========= Delete msg ============ //
    socket.on('deletemsg', function(data) {
        chatModel.deletemsg(data, (err, res) => {
            console.log("result=>", res);
        });
    });

    // ========= Delete for everyone msg ============ //
    socket.on('deletefor_everyone', async function(data) {
        receiverInfo = await qb.select('socket_id').where('user_id', data.r_id).get('bgpkr_users');
        chatModel.deletefor_everyone(data, (err, res) => {
            io.sockets.to(receiverInfo[0].socket_id).emit('Delete_ids', {
                "result": res
            });
            io.sockets.to(socket.id).emit('Delete_ids', {
                "result": res
            });
        });
    });

    // ========= Disconnect Chat ============ //
    socket.on('disconnect', function() {
        const user = users.removeUser(socket.id);
        chatModel.disconnectUser(socket.id, (err, dbData) => {
            if (err) {
                console.log(err);
            }

        })
    })
//===========end disconnect event=============//

}); //========end scocket==========//

//=======send push================//

function sendpush(device_type, device_token, msg) {
    var msg_data = {
        "registration_ids": [device_token],
        "data": {
            "title": msg.title,
            "body": msg.message,
            "s_id":msg.s_id,
            "r_id":msg.r_id,
            "click_action": "https://bagpackar.com/user-chat",
            "sender_name":msg.sender_name,
            "type":msg.type,
            "sound": "default",
            "badge": 1
        }
    };
    fcm.send(msg_data, function(err, response) {
        if (err) {
            console.log("Something has gone wrong!");
            console.log("errror" + err);
        } else {
            console.log("web Successfully sent with response: " + response);
        }
    });
}


//====================function send mail=================//


// async..await is not allowed in global scope, must use a wrapper
async function SendMail(s_id,r_id) {
    var senderdata = await qb.select('name').where('user_id',s_id).get('bgpkr_users'); 
    var receiverdata = await qb.select('name,email').where('user_id',r_id).get('bgpkr_users');
    let testAccount = await nodemailer.createTestAccount();
    let img ='https://www.bagpackar.in/assets/images/pinicon.png';
    let img1 ='https://www.bagpackar.in/assets/images/logo.png';
    let referal_url='https://www.bagpackar.com/referral';

  // create reusable transporter object using the default SMTP transport
  let transporter = nodemailer.createTransport({
    host: "smtp-relay.sendinblue.com",
    port: 587,
    secure: false, // true for 465, false for other ports
    auth: {
      user: 'support@bagpackar.com', // generated ethereal user
      pass: '78zn6XhH3k0yqURm', // generated ethereal password
  },
});
  var message="<img src="+img+" style='float:left; margin-right:20px;width:50px'/><br><br><p>Hi "+receiverdata[0].name+",<br>You have new message from "+senderdata[0].name+" regarding your apartment. Please check your Bagpackar account to see the message and reply.</p><p>Refer your friend and earn up to $30 towards your travel credit. Please read more about our <a href="+referal_url+"> Referral program</a></p><br>Regards,<br>Bagpackar, LLC<br><img src="+img1+" style='float:left; margin-right:20px;width:110px'/></p>";
  // send mail with defined transport object
  let info = await transporter.sendMail({
    from: 'support@bagpackar.com', // sender address
    to: receiverdata[0].email,// list of receivers
    subject: "New guest message", // Subject line
    text:"",
    html:message 
});

  console.log("Message sent: %s", info.messageId);
}



