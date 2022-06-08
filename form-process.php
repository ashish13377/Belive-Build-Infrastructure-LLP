<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$msg_subject= $_POST['msg_subject'];
$message= $_POST['message'];


$to = "trojan2277@gmail.com";
$subject = "Mail From  Belive & Build Infrastructure";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $msg_subject . "\r\n Message ="  . $message;

$headers = "From: info@sparify.com" . "\r\n" ;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>