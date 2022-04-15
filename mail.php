<?php
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$mobile = $_POST['mobile'];
$to = "code.soft@ymail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message."\r\n Mobile =".$mobile;
$headers = "From: noreply@revenuecase.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
