<?php

require_once './phpmailer/phpmail/PHPMailerAutoload.php';

$m = new PHPMailer;

$m->isSMTP();
$m->SMTPAuth = true;
$m->SMTPDebug = 2;

$m->Host = 'mail.bvulive.in';
$m->Username = 'admin@bvulive.in';
$m->Password = 'myniki123';
$m->SMTPSecure = 'tls';
$m->Port = 587;

//From email address and name
$m->From = 'admin@bvulive.in';
$m->FromName = 'admin';

//Address to which recipient will reply
$m->addReplyTo('admin@bvulive.in','Admin');

//To address and name
$m->addAddress('narora200@gmail.com','Nikhil Arora'); //Recipient name is optional

//CC and BCC
//$m->addCC("cc@example.com");
$mail_id = mysql_query("SELECT email FROM emails WHERE subscribed='1'");
$i=0;
while($email = mysql_fetch_array($mail_id)){
	$result[$i] = $email['email'];
	$i++;

}
$j=0;
for($j=0;$j<$i;$j++){

$m->addBCC($result[$j]);

}

//Send HTML or Plain Text email
$m->isHTML(true);

//Provide file path and name of the attachments
//$m->addAttachment("file.txt", "File.txt");        
//$m->addAttachment("images/profile.png"); //Filename is optional


$m->Subject = 'Here is an email!';
$m->Body = '<i>This is the body of the e-mail</i>';
$m->AltBody = 'This is the body of the e-mail!';


if(!$m->send()){
	echo "Mailer Error: " . $m->ErrorInfo;
} else {

	echo "Message has been sent successfully";	

};

?>

