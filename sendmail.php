<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "htakamplle@gmail.com";  // YOUR EMAIL
    $subject = "New Contact Form Message - Portfolio Website";

    $body = "You have received a new message from your portfolio website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "<h2 style='text-align:center; color:green;'>Message Sent Successfully!</h2>";
        echo "<p style='text-align:center;'><a href='contact.html'>Go Back</a></p>";
    } else {
        echo "<h2 style='text-align:center; color:red;'>Message Failed! Server mail system not working.</h2>";
        echo "<p style='text-align:center;'><a href='contact.html'>Go Back</a></p>";
    }

} else {
    echo "<h2 style='text-align:center; color:red;'>Please fill all fields!</h2>";
    echo "<p style='text-align:center;'><a href='contact.html'>Go Back</a></p>";
}

?>
