<?php

$to = 'login@gmail.com, login2@gmail.com';
$name = clear_data($_POST['name']);
$email = clear_data($_POST['email']);
$text = clear_data($_POST['text']);
$subject = 'Application from the site';
$headers = "From: w1ter@gmail.com\r\n";
$headers .= "Reply-To: w1ter@gmail.com\r\n";
$headers .= "X-Mailer: PHP/". phpversion();
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$message = '
<html>
<body>
<center>
<table border="1" cellpadding="6" cellspacing="0" width="90%" bordercolor="#DBDBDB">
<tr><td colspan="2" align="center" bgcolor="#E4E4E4E4"><b>Client information</b></td></tr>
';
$message .= '<tr>
<td><b>Client Name</b></td>
<td>'. $name .'</td>
</tr>
<tr>
<td><b>Email</b></td>
<td>'. $email .'</td>
</tr>
<tr>
<td><b>Message Text</b></td>
<td>'. $text .'</td>
</tr>';

function clear_data($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);
    return $val;
}
if (isset($_POST['submit'])){   //Your button name 'submit'
    mail($to, $subject, $message, $headers);
}


?>