<?php

 if(isset($_POST['submit'])){
	 $to="vivekpandey09032002@gmail.com";
	 $subject= $_POST['subject'];
	 $email= $_POST['email'];
	 $txt= $_POST['message'];
	 $headers= "From:" .$email."\r\n".
	 "CC: somebodyelse@example.com";
	 
	 mail($to,$subject,$message,$headers);
	 header("Location: index.html");
 }


?>