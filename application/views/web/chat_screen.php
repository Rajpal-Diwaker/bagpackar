
<div id="another_wrapper">
  <input type="hidden" id="user_id" value="<?php echo $data['user_id'];?>">
  <input type="hidden" id="receiver_id">
  <input type="hidden" id="sender_type" value="<?php echo $data['sender_type'];?>">
  <input type="hidden" id="reciver_type" value="<?php echo $data['reciver_type'];?>">
  <div class="chatwr">
    <div class="chathistory">
      <span class="messheading"><span>Messages<span id="new_msg"></span></span>
    </span>
    <div class="chathisliwr">
    </div> 
  </div>
  <div class="chatscreen chatscreenmb">
    <a href="javascript:void(0);" class="chatback_tolist">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
      <path class="a"
      d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
      transform="translate(-5.625 -6.33)"></path>
    </svg>
  </a>
  <div class="chat_currentp">

  </div>
  <div class="chat_screencontent">
  </div>
  <div class="chat_input">
    <textarea name="message" id="message" placeholder="Type your message....." cols="2" rows="2"></textarea>
    <label for="chat_inputsubmit">
      <svg xmlns="http://www.w3.org/2000/svg" width="26.998" height="26.995" viewBox="0 0 26.998 26.995">
        <path
        d="M30.649,4.563,4.838,15.813a.592.592,0,0,0,.021,1.076l6.982,3.945a1.126,1.126,0,0,0,1.287-.127L26.895,8.838c.091-.077.309-.225.394-.141s-.049.3-.127.394L15.251,22.507a1.122,1.122,0,0,0-.113,1.343L19.7,31.17a.594.594,0,0,0,1.069-.014L31.444,5.344A.592.592,0,0,0,30.649,4.563Z"
        transform="translate(-4.503 -4.503)" /></svg>
      </label>
      <input type="submit" id="chat_inputsubmit" class="hidden-lg hidden-md hidden-sm hidden-xs">
    </div>
    <!--welcome view start here -->
    <div class="chatwelcome_view">
    </div>
    <!--welcome view end here -->
  </div>
</div>
</div>
</body>
<script src="<?php echo base_url();?>assets/js/lottie.js"></script>
<script src="<?php echo base_url();?>assets/js/loader_script.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets/js/alertify.js"></script>
<script src="<?php echo base_url();?>chat/js/socket.io-1.4.5.js"></script>
<script type="text/javascript">
 $('.loaderCntr').show();
 $('.chat_input').hide();
 $('.chat_currentp').hide();
 $('.chat_screencontent').hide();
 var first_time="";
 var image_html=""; 
 <?php if(!empty($data['user_image'])){ ?>
  image_html='<img src="<?php echo $data["user_image"];?>" alt="">'; 
<?php }else{ ?>
  image_html='<div class="profileifnotImage"><?php echo ucfirst($data['name'][0]);?></div>';
<?php } ?>
var first_time='<h2>Welcome, <?php echo $data['name'];?></h2><div class="chat_welpersosn"><div class="chat_welpersoinner">'+image_html+'</div><span class="online_dots"></span></div>';
$('.chatwelcome_view').append(first_time);
$(function() {  
  // <?php  $url=substr(base_url(), 0, -1);?>//
  var socket = io.connect('https://www.bagpackar.in:3637', {secure: true});
 // var socket = io.connect('http://localhost:3636', {secure: false});
 var user_id= $('#user_id').val(); 
 var user_arg = {"user_id":user_id};
 socket.emit('conversationList', user_arg);

     //========conversation list emit==================//  
     socket.on("conversationList", function(obj){
      console.log("checkemit",obj)
      var user_id= parseInt($('#user_id').val()); 
      $('.loaderCntr').hide();
      $(".chathisliwr").html('');
      if (obj.result.chat_msg != undefined && obj.result.chat_msg > 0){
       $('#new_msg').text('('+obj.result.chat_msg+')');
     }else{
      $('#new_msg').text('');
    }  
    var chatlisting = '';
    var new_coming_msg='';
    if (obj.result.data !== undefined && obj.result.data.length > 0){
      //===========for each loop=====================//
     $.each(obj.result.data, function(key, value) {
       var profile_pic="";
       var typing_id ="";
       var reciver_types="";

       if(value.s_id==user_id){
        typing_id=value.r_id;
        reciver_types=value.reciver_type;
      }else if(value.r_id==user_id){
        typing_id=value.s_id;
        reciver_types=value.sender_type;
      }
      //===============using for image======================//
      if(value.user_image) {
       profile_pic='<img src="'+value.user_image+'" alt="">'; 
     }else{
      profile_pic='<div class="profileifnotImage">'+value.user_name.charAt(0)+'</div>';
    }
    //==============using for unread count=====================//
    if(value.unread_cn>0){
      new_coming_msg='<span class="chatpname font_bold"><span class="text_trim">'+value.user_name+'('+reciver_types+')</span><span class="badge badge-pill">'+value.unread_cn+'</span>';  
    }else{
      new_coming_msg='<span class="chatpname"><span class="text_trim">'+value.user_name+'('+reciver_types+')</span><span class="badge badge-pill"></span>';
    }
  //====================using for date===============================//
    var date = new Date(value.date_added);
    // console.log("val",value.date_added)
    var msgtime = timeSince(date);
    //================create all data ====================================//
    chatlisting += '<div class="chathisli showChat" id="'+ value.user_id +'"><span class="plti"><span class="pt">'+msgtime+'</span></span><div class="chat_imginfo"><span class="chatimg">'+profile_pic+'</span><span class="chatinfo">'+new_coming_msg+'</span><span class="chatpmess">'+value.msg+'</span><span class="typing" id="typing_'+typing_id+'"></span></span></div><span class="dottedline"></span></div>';
  });
   }else{
    chatlisting+='<div class="notFoundata text_black">No Chat Available</div>';
  }
  $(".chathisliwr").prepend(chatlisting);
});

//=========Init chat and get chat list====================//
$(document).on("click", '.showChat', function(event) {
  $('.loaderCntr').show();
  $('.chatscreen').show();  
  var s_id=parseInt($('#user_id').val());
  var r_id=parseInt($(this).attr("id"));
  $('#receiver_id').val($(this).attr("id"));
  var args={"s_id":s_id,"r_id":r_id};
  socket.emit('initChat', args );  
  $('.chat_input').show();
  $('.chat_currentp').show();
  $('.chat_screencontent').show();
  $('.chatwelcome_view').html('');
  socket.emit('getChatList', args);

  socket.on("getChatList", function(obj){
    // console.log("obwwwwwj",obj)
    $('.loaderCntr').hide();
    $('.chat_screencontent').html('');
    $(".chat_currentp").html('');
    var msgDiv="";
    if (obj.result.chat_msg != undefined && obj.result.chat_msg > 0){
     $('#new_msg').text('('+obj.result.chat_msg+')');
   }else{
    $('#new_msg').text('');
  }  
  var chatdata=obj.result.data;
  var resDiv ='';
  if (chatdata !== undefined && chatdata.length > 0){
   var chat_current_profile='';
   var profile_pic="";
   if(obj.result.user_info.user_image) {
     profile_pic='<img src="'+obj.result.user_info.user_image+'" alt="">'; 
   }else{
     profile_pic='<div class="profileifnotImage">'+obj.result.user_info.name.charAt(0)+'</div>';
   }
   chat_current_profile +='<span class="chatcupalp">'+obj.result.book_info.name_listing+'</span><div class="chatcurrentpimg"><span class="chatcimg">'+profile_pic+'</span><span class="chatcper">'+obj.result.user_info.name+'</span></div><span class="dottedline"></span>';

   $.each(chatdata, function(key, value) {
    var s_id=parseInt($('#user_id').val());
    if(value.s_id==s_id){
     resDiv +='<div class="clearfix text-right"><div class="chat_sender">'+value.msg+'</div></div>';
   }else{
     resDiv +='<div class="clearfix"><div class="chat_reciver">'+ value.msg+'</div></div>';
   }
 }); 
   $(".chat_currentp").append(chat_current_profile);
   $(".chat_screencontent").append(resDiv);
   $('.loader').hide();
   $('.chat_screencontent').animate({ scrollTop: $('.chat_screencontent')[0].scrollHeight }, 'fast');
 }else{
   var resDiv = '<div class="notFoundata">No Data Found</div>';
   $(".chat_currentp").html('');
   $(".chat_screencontent").html('');
   $(".chat_screencontent").append(resDiv);
   $('.loader').hide();
 }
});
  if($(window).width() <= 767) {
    $('.chathistory').hide(); 
  }
}) 

//==========use for reciver=======================//
socket.on("getChatList", function(obj){
  // console.log("getChatList",obj)
  var chatdata=obj.result.data;
  if (chatdata !== undefined && chatdata.length > 0){
   var resDiv ='<div>';
   $.each(chatdata, function(key, value) {
    var s_id=parseInt($('#user_id').val());
    if(value.s_id==s_id){
     resDiv +='<div class="clearfix text-right"><div class="chat_sender">'+value.msg+'</div></div>';
   }else{
     resDiv +='<div class="clearfix"><div class="chat_reciver">'+value.msg+'</div></div>';
   }
 }); 
   resDiv += '</div>';
   $(".chat_screencontent").prepend(resDiv);
   $('.loader').hide();
   $('.chat_screencontent').animate({ scrollTop: $('.chat_screencontent')[0].scrollHeight }, 'fast');
 }else{
   var resDiv = '<div></div>';
   $(".chat_screencontent").prepend(resDiv);
   $('.loader').hide();
 }
});

//===========send message=====================//
$("#chat_inputsubmit").on('click', function(event) {
 var chatStatus = true;
 if ($( "#message" ).val() === "") {
   chatStatus = false;
 }
 var message =$("#message").val();
 if(message === ""){
  chatStatus = false;
}
if (!chatStatus) {
 event.preventDefault();
} else {
 var s_id=parseInt($('#user_id').val());
 var r_id=parseInt($('#receiver_id').val());
 var sender_type=$('#sender_type').val(); 
 var reciver_type=$('#reciver_type').val();   
 var argument={"s_id":s_id,"r_id":r_id,"msg":message,"action":"","sender_type":sender_type,"reciver_type":reciver_type,"type":"","host_id":""};
 socket.emit('sendMessage', argument);
 setTimeout(function(){ $('#message').val('').focus(); }, 1);
 $('#message-error').text('');
}
});

//==========on last message recived=============//
socket.on("receiveMessage", function(obj){
 var user_id=parseInt($('#user_id').val()); 
 var resDiv="";    
 if(user_id==obj.result.s_id){
   resDiv +='<div class="clearfix text-right"><div class="chat_sender">'+obj.result.msg+'</div></div>';
 }else{
   resDiv +='<div class="clearfix"><div class="chat_reciver">'+ obj.result.msg+'</div></div>';
 }
 $(".chat_screencontent").append(resDiv);
 $('.chat_screencontent').animate({ scrollTop: $('.chat_screencontent')[0].scrollHeight }, 'fast');
})


socket.on("typingMsg", function(obj){
 if(obj.result.typing==true){
  $("#typing_"+obj.result.s_id).html('Typing...');
  $("#typing_"+obj.result.s_id).parents('.chatinfo').find('.chatpmess').hide();
}
else{
 $("#typing_"+obj.result.s_id).html('');
 $("#typing_"+obj.result.s_id).parents('.chatinfo').find('.chatpmess').show();
}
})

function timeoutFunction() { 
 var s_id=parseInt($('#user_id').val());
 var r_id=parseInt($('#receiver_id').val());
 var args={"s_id":s_id,"r_id":r_id, typing:false}; 
 socket.emit("typing", args);
}
$("#message").on('keyup', function(e) {
  var s_id=parseInt($('#user_id').val());
  var r_id=parseInt($('#receiver_id').val());
  var args={"s_id":s_id,"r_id":r_id, typing:true};
  socket.emit('typing', args);
  setTimeout(timeoutFunction, 4000)

}) 

 });//socket close=======//

$('textarea').on('keydown', function(event) {
 if(event.keyCode == 13) {
   if (!event.shiftKey) {
     $('#chat_inputsubmit').click();
   }
 }
});

//=============time date function ============//
// --- Main function
function timeSince(previous) {
  var current=new Date();
  console.log("previous",previous)
  console.log("current",current)
  var msPerMinute = 60 * 1000;
  var msPerHour = msPerMinute * 60;
  var msPerDay = msPerHour * 24;
  var msPerMonth = msPerDay * 30;
  var msPerYear = msPerDay * 365;
  var elapsed = current - previous;
  if (elapsed<=0) {
    return 'just now';   
  }
  else if (elapsed < msPerMinute) {
   return Math.round(elapsed/1000) + ' seconds ago';   
 }

 else if (elapsed < msPerHour) {
   return Math.round(elapsed/msPerMinute) + ' minutes ago';   
 }

 else if (elapsed < msPerDay ) {
   return Math.round(elapsed/msPerHour ) + ' hours ago';   
 }

 else if (elapsed < msPerMonth) {
  return Math.round(elapsed/msPerDay) + ' days ago';   
}

else if (elapsed < msPerYear) {
  return  Math.round(elapsed/msPerMonth) + ' months ago';   
}

else {
  return Math.round(elapsed/msPerYear ) + ' years ago';   
}
} 
//===========use for back buttton==============//
$(document).on('click', '.chatback_tolist', function () {
 $('.chathistory').show();
 $('.chatscreen').hide();  
});

</script>

</html>