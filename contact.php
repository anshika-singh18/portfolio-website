<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "anshikasingh1812@gmail.com"; // Change this to your email address
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $email_body = "You have received a new message from $name.\n".
                  "Email address: $email\n".
                  "Subject: $subject\n".
                  "Message: \n$message";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
