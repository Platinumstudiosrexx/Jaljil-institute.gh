<?php

$name = $_POST['name'];
$vistor_email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];

$email_from = 'isaacadudarko@gmail.com';

$emial_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $vistor_email.\n".
                "Subject: $subject.\n".
                "User Message: $Message.\n";
                
$to = 'jajilinstitute@gmail.com';

$headers = "From: $email_form\r\n";

$headers .="Reply-To: $visitor-email \r\n";   


mail($to,$email_subject,$email_body,$headers);

header("location: cantact.html");


  ?>