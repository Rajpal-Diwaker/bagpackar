var qb = require('../Utilities/dbConfig').qb;
// =========== Update Socket Status of User  ======= //

let updateSocket = (postData, socket_id, callback) => {
    let updateData = {
        "chat_with": postData.r_id,
        "socket_id": socket_id
    }
    qb.update('bgpkr_users', updateData, { 'user_id': postData['s_id'] }, (err, res) => {
        if (err)
            callback(err);
        callback(err, res)

    });
}


// =======Insert Chat Message Data ===== //

let sendChatMessage = async(postData, callback) => {
    // console.log("postData",postData);
    var insertData = {};
    var read_status = "";
    senderinfo = await qb.select('name,chat_with,socket_id').where('user_id', postData['s_id']).get('bgpkr_users');
    recevierInfo = await qb.select('chat_with').where('user_id', postData['r_id']).get('bgpkr_users');
    if (senderinfo && recevierInfo && senderinfo[0]['chat_with'] == postData.r_id && recevierInfo[0]['chat_with'] == postData.s_id) {
        read_status = '';
    }else{
        read_status = postData.r_id;
    }
    insertData = {
        "s_id": postData.s_id,
        "r_id": postData.r_id,
        "msg": postData.msg,
        "url":"",
        "action":postData.action,
        "thumb_url":"",
        "sender_type":postData.sender_type,
        "reciver_type":postData.reciver_type,
        "msg_type":'text',
        "read_status": read_status,
        "deleted_by": postData.deleted_by,
        "chat_type":'normal',
        "date_added": postData.date_added,
        "type":postData.type,
        "host_id":postData.host_id
    }
    qb.returning('id').insert('bgpkr_chat', insertData, (err, insertRes) => {
        var result = {
            read_status: read_status,
            insert_id: insertRes.insertId,
            name: senderinfo[0].name
        }
        callback(null, result);
    });
}

// =========Get Receiver Socket Id ===== //

let getRecevierSocketData = (postData, callback) => {
 let sql = `select socket_id,chat_with,IFNULL((select block_status from bgpkr_chat_block_users where user_id=${postData['r_id']} and block_id=${postData['s_id']}),'0') as block_status from bgpkr_users where user_id=${postData['r_id']}`;
 qb.query(sql, (err, res) => {
    if (err)
        callback(err);
    if (res && res.length > 0)
        callback(null, res[0])
});
}

// ====== Update Read Status Of Chat List  === //

let updateReadStatus = (postData, callback) => {
    qb.update('bgpkr_chat', { 'read_status': '' }, { 's_id': postData['r_id'], 'r_id': postData['s_id'] }, (err, res) => {
        if (err) {
            callback(err);
        }

        callback(err, res)
    });

}


// ======= Chat List of s_id and r_id  ==== //
let getChatList = async(postData, callback) => {
//=============new sql=================//    
let newsql=`select s_id from bgpkr_chat where read_status=${postData['s_id']} GROUP by s_id`;
//==================sql1=======================//
let sql1=`select name,user_image from bgpkr_users where user_id=${postData['r_id']}`;
//=================sql2======================//
let sql2=`SELECT bhp.name_listing,bb.booking_id,bb.from_date,bb.to_date FROM bgpkr_booking as bb LEFT JOIN bgpkr_host_placetype as bhp ON bhp.host_id=bb.host_id where((bb.guest_id=${postData['s_id']} and bb.user_id=${postData['r_id']}) or (bb.guest_id=${postData['r_id']} and bb.user_id=${postData['s_id']})) ORDER BY bb.booking_id DESC limit 1;`  
// console.log("sql2",sql2);
//====================sql3=======================//
qb.select('bgpkr_chat.*,DATE_FORMAT(date_added,"%Y-%m-%d %H:%i:%s") as date_added,!find_in_set(' + postData['s_id'] + ',bgpkr_chat.deleted_by) as delete_status', false).where("((s_id = " + postData['s_id'] + " AND r_id = " + postData['r_id'] + " AND delete_for_everyone != '1') OR (s_id = " + postData['r_id'] + " AND r_id = " + postData['s_id'] + " AND delete_for_everyone != '1'))").having('delete_status !=', '0').order_by('id', 'ASC').get('bgpkr_chat', async(err, res) => {
    qb.query(sql1, async(err1, res1) => {
        if (err1) {
            callback(err1);
        }
        qb.query(newsql, async(err2, res2) => {
            if (err2) {
                callback(err2);
            }
            qb.query(sql2, async(err3, res3) => {
                if (err3) {
                    callback(err3);
                }
                if(res3.length>0){
                  book_info=res3[0];  
              }else{
                const name_listing = await qb.select('hp.name_listing').from('bgpkr_chat as c').join('bgpkr_host_placetype as hp','c.host_id=hp.host_id','left').where("((c.s_id = " + postData['s_id'] + " AND c.r_id = " + postData['r_id'] + ") OR (c.s_id = " + postData['r_id'] + " AND c.r_id = " + postData['s_id'] + "))").where('c.type','simple').limit('1').get();
                book_info=name_listing[0]; 
                console.log("Query name_listing: " + qb.last_query());
                
            }

            var result = {
                chat_msg:res2.length,
                user_info:res1[0],
                book_info:book_info,
                data: res
            }
            console.log("gggggggggg",result)
            callback(err, result);
        });
        });
    });
});
}



// ===================== Disconnect User  ====================== //

let disconnectUser = (socket_id, callback) => {
    let updateData = {
        "chat_with": 0,
        "socket_id": ""
    }
    qb.where('socket_id', socket_id).update('bgpkr_users', updateData, (err, res) => {
        if (err){
            callback(err);
        }
        callback(res);

    });

}


// ===================== Conversation List  ====================== //

let conversationList = (postData, callback) => {
    let sql=`select s_id from bgpkr_chat where read_status=${postData['user_id']} GROUP by s_id`;
    let sql1=`SELECT c.id,c.s_id,c.r_id,c.msg,c.sender_type,c.reciver_type,c.date_added,c.read_status,u.user_id,u.name as user_name,u.user_image,(SELECT COUNT(read_status) FROM bgpkr_chat where ((s_id=c.s_id and r_id=c.r_id) or (s_id=c.r_id and r_id=c.s_id)) and read_status=${postData['user_id']}) as unread_cn FROM bgpkr_chat as c LEFT JOIN bgpkr_users as u ON ( CASE WHEN c.s_id = ${postData['user_id']} THEN c.r_id = u.user_id ELSE c.s_id= u.user_id END) WHERE c.id IN(SELECT MAX(id) FROM bgpkr_chat WHERE s_id = ${postData['user_id']} OR r_id = ${postData['user_id']} and !find_in_set('${postData['user_id']}',bgpkr_chat.deleted_by) GROUP BY CASE WHEN s_id=${postData['user_id']} THEN if(s_id =${postData['user_id']},r_id,s_id) ELSE s_id END) and delete_for_everyone='0' ORDER BY c.id DESC`;        
    console.log('------------->',sql1);
    qb.query(sql, (err, res) => {
        if (err) {
           callback(err);
       }
       qb.query(sql1, (err1, res1) => {
        if (err1) {
         callback(err1);
     }
     var result = {
        chat_msg:res.length,
        data: res1
    }
    callback(err, result);
});
   });
}






//============delete msg================//
let deletemsg = async(postData, callback) => {
    var msg_array = [];
    var msg_array = postData.msg_id.split(',');
    var msglength = msg_array.length;
    var deleteId = [];
    for (let i = 0; i < msglength; i++) {
        var res = await qb.select('deleted_by').where({ 'id': msg_array[i] }).get('bgpkr_chat');
        if (res && res.length > 0) {
            if (res[0]['deleted_by'] == '') {
                deleteId.push(postData.s_id)
            } else {
                deleteId = res[0]['deleted_by'].split(',');
                deleteId.push(postData.s_id);
            } 
            let ids = deleteId.toString();
            await qb.set('deleted_by', ids).where('id', msg_array[i]).update('bgpkr_chat');
            // console.log("Query Ran: " + qb.last_query());
            deleteId = [];
        }
    }
    callback(null, "1");
}


//============delete for everyone  msg================//
let deletefor_everyone = async(postData, callback) => {
    var msg_array = [];
    var new_array = [];
    var msg_array = postData.msg_id.split(',');
    var msglength = msg_array.length;
    for (let i = 0; i < msglength; i++) {
     new_array.push(parseInt(msg_array[i]));
     await qb.where('id', msg_array[i]).delete('bgpkr_chat');
     // console.log("DELETE Query Ran: " + qb.last_query());
 }
 callback(null, new_array);
}

module.exports = {
    updateSocket,
    sendChatMessage,
    getRecevierSocketData,
    updateReadStatus,
    getChatList,
    disconnectUser,
    conversationList,
    deletemsg,
    deletefor_everyone
}