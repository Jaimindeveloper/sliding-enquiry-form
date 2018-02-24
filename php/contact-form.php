<?php
header('Access-Control-Allow-Origin: jaimindeveloper.github.io');
header('Access-Control-Allow-Methods: POST');
header('Accept: application/json');
header('Content-Type: application/json');

ini_set("SMTP","mail.gmail.com");
ini_set("smtp_port","25");
ini_set('sendmail_from', 'jaimin.suthar12@gmail.com');
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobile'];
$message = $_POST['message'];
$ipaddress = $_POST['ipaddress'];
$city = $_POST['city'];
$country = $_POST['country'];
$otherDetail = $_POST['otherDetail'];

$to = 'jaimin.suthar12@gmail.com';
$subject = "Website Enquiry: ".$name;
$message = "Hello Jaimin,<br/>";
$message .= "<br/><br/><br/> =========== Please check below information =========== <br/>";
$message .= "<Br/> Name: ".$name;
$message .= "<Br/> Email Address: ".$email;
$message .= "<Br/> Mobile No: ".$mobileno;
$message .= "<Br/> Message: ".$message;
$message .= "<Br/> IP Address: ".$ipaddress;
$message .= "<Br/> City: ".$city;
$message .= "<Br/> Country: ".$country;
$message .= "<Br/> Other Details: ".$otherDetail;

$headers = 'From: '.$email . "\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to,$subject,$message,$headers)) { 
    echo 0;  
} else {
    echo 1; 
}
?>
