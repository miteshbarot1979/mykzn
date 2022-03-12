<?php 

$to = "rambabburi@gmail.com,admin@Mail.com";
$subject = "Test Email";
$message = "Hi Ram,<br>Thanks for creating an account withus. please click the below link to activate your account<br><br><a href=''>Activate Now</a><br>Thanks<br>team";

//$mheaders = "Content-Type:text/html";

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'Content-Type:text/html' ."\r\n".
	'CC:ram@Mail.com';

if(mail($to,$subject,$message, $mheaders))
{
	echo "Mail Sent Sucessfully";
}
else{
	echo "Sorry! Unable to sent an email";
	
}


?>