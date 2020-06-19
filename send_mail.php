
<html>
   
   <head>
      <title></title>
   </head>
   
   <body>
      
      <?php
      
         $to = "sanjaydb@trizeus.com";
         $subject = "How To Hack hacker 21";
         
         $message = "<b>using gdbtui .</b>";
         $message .= "<h1>locate ESP.</h1>";
         
         $header = "From:sanjaydb@trizeus.com \r\n";
         $header .= "Cc:sanjay.d.bhalerao@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
