<?php     
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST ['message'];
$email_from = 'liamtsong8@gmail.com';

$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
    "User Email: $visitor_email.\n".
    "User Message: $message.\n";

$to = "777018@pdsb.net";

$headers = "From $email_from \r\n";
$headers = "Reply-to: $visitor_email\r\n";


mail($from,$to,$email_subject,$email_body,$headers);












?>
