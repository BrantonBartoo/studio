<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject=$_POST['subject'];
$message =$_POST['message'];

$email_from ='file:///C:/Users/user/kibet/bartoo20.html';
$email_subject = 'New Form Submission';
$email_body ="User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n.
             "message: $message.\n;
$to = 'brantonkib@gmail.com';
$headers ="from: $email_from\rn";
$headers .= "reply-to: $visitor_email\r\n";

email($to,$email_subject,$email_body,$headers);
header("location:contact.html");


?>