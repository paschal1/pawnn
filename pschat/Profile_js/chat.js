$(document).ready(function() {
	 
    fetch_user();

    setInterval(function(){
       update_user_activity();
       fetch_user();
    }, 5000);

    // fetch users
    
    function fetch_user(){
     $.ajax({
url: "fetch_user.php",
method: "POST",
success: function(data){
   //alert(data);
   $("#userdata").html(data);
       }
    })
   
    }
    
function update_user_activity(){
   $.ajax({
url: "update_user.php",
//method: "POST",
success: function(data){
   //alert(data);
   //$("#userdata").html(data);

   
}
    })

}



function make_chat_dialog_box(to_user_id, to_user_name){

   var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="Chatting...'+to_user_name+'">';
   modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
   modal_content += '</div>';
   modal_content += '<div class="form-group">';
   modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control"></textarea>';
   modal_content += '</div><div class="form-group" align="right">';
   modal_content += '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">send</button></div></div>';

   $('#user_model_details').html(modal_content);
   

}

$(document).on('click', '.start_chat', function(){

var to_user_id = $(this).data('touserid');
var to_user_name = $(this).data('tousername');

make_chat_dialog_box(to_user_id, to_user_name);
$("#user_dialog_"+to_user_id).dialog({

autoOpen:false,
width:400


});

$('#user_dialog_'+to_user_id).dialog('open');
$('chat_message_'+to_user_id).emojioneArea({
   pickerPosition:"top",
   toneStyle:"bullet"
});

});
$(document).on('click','.send_chat', function(){
   var to_user_id = $(this).attr('id');
   var chat_message = $('#chat_message_'+to_user_id).val();

   $.ajax({
       url:"sendMessage.php",
       method:"POST",
       data:{to_user_id:to_user_id, chat_message:chat_message},
       success:function(data){
          // $('#chat_message_'+to_user_id).val('');
          var element = $('#chat_message_'+to_user_id).emojioneArea();
          element[0].emojioneArea.setText('');
           $('#chat_history_'+to_user_id).html(data);
       }
   })
});

function fetch_user_chat_history(to_user_id)
{
   $.ajax({
       url:"fetch_user_chat_history.php",
       method: "POST",
       data:{to_user_id:to_user_id},
       success: function(data){
           $('#chat_history_'+to_user_id).html(data);

       }

       
   })

   setInterval(function(){
      fetch_user_chat_history(to_user_id);
      fetch_user();
   }, 1000);
}

function update_chat_history_data()
{
   
   $('.chat_history').each(function(){
       var to_user_id = $(this).data('touserid');
       fetch_user_chat_history(to_user_id);
       
   });
}
$(document).on('click','.ui-button-icon', function(){
   $('.user_dialog').dialog('destroy').remove();
});

$($document).on('focus', '.chat_message', function(){
   var is_type = 'yes';
   $.ajax({
       url:"update_is_type_status.php",
       method: "POST",
       data:{is_type:is_type},
       success: function(){

       }
   
   })
});


$($document).on('blur','.chat_message', function(){
   var is_type ='no';

   $.ajax({
       url:"update_is_type_status.php",
       method: "POST",
       data:{is_type:is_type},
       success: function(){

       }
   })

});


$(document).on('click','.send_chat', function(){
   var to_user_id = $(this).attr('id');
   var chat_message = $('#chat_message_'+to_user_id).val();

   $.ajax({
       url:"sendMessage.php",
       method:"POST",
       data:{to_user_id:to_user_id, chat_message:chat_message},
       success:function(data){
          // $('#chat_message_'+to_user_id).val('');
          var element = $('#chat_message_'+to_user_id).emojioneArea();
          element[0].emojioneArea.setText('');
           $('#chat_history_'+to_user_id).html(data);
       }
   })
});

$(document).on('click','.remove_chat', function(){

   var user_id = $(this).attr('id');
   if(confirm("Trust you really want to remove this chat?")
   )
   {

      
   $.ajax({
      url:"remove_chat.php",
      method: "POST",
      data:{user_id:user_id},
      success: function(data){
         update_chat_history_data();
         
      }
  })

   }

});

});