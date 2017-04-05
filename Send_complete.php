<?php
if(isset($_POST['email'])) {
 
    $email_to = "alexanderhowkins@live.co.uk";
    $email_subject = "Your email subject line";

    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
Your message has been sent. We aim to reply to all questions as soon as possible.
 
<?php
}
?>