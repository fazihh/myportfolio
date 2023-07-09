<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'fazihtp@gmail.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Error: Unable to send the message.';
    }
} else {
    echo 'Error: Invalid request.';
}
?>
