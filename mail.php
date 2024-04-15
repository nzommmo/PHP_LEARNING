<?php  
   ini_set("sendmail_from", "ericnzomo17@gmail.com");  
   $to = "ricknedo3@gmail.com";//change receiver address  
   $subject = "This is subject";  
   $message = "This is simple text message.";  
   $header = "From:ericnzomo17@gmail.com \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }  
?>