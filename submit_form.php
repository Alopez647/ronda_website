<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // You can perform additional validation or processing here
    
    // Example: Send an email with the form data
    $to = "your@email.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong.";
    }
} else {
    echo "Invalid request!";
}
?>
