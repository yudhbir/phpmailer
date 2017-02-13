<?php
include_once('mailer/class.phpmailer.php');	
 
 $name = !empty($_POST['fname3']) ? $_POST['fname3'] : '';
 
 $email = !empty($_POST['email3']) ? $_POST['email3'] : '';
 
 $message2 = !empty($_POST['message3']) ? $_POST['message3'] : ''; 

$sub='Guest user inormation';
 
$mail = new PHPMailer(); 

$mail->From = "Support@abacasys.com";
$mail->FromName = "Support@abacasys";


$mail->isHTML(true);



// $mail->addAddress("test@test.com", "test");


// $tpl = file_get_contents('mail.html');
// $tpl = str_replace('{{Customer_Name}}', $content, $tpl);

$mail->Subject = $sub;
$mail->Body = "User ".$name." has  been visited with following information:<br> Email: ".$email;

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}

//for smtp
 require_once('class.smtp.php');
$mail = new PHPMailer(); 


//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "j60degree";                 
$mail->Password = "demo123@";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "";
$mail->FromName = "Full Name";

$mail->addAddress("test@test.com", "Recepient Name");
$mail->addAddress("test.singh@test.com", "Recepient Name");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}