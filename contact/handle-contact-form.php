<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])){
    mail("someone@example.com", "MyHome Contact Form Message", "
    Name: $name;
    Email: $email;
    Message:
    $message
    ;
    ", "From: someoneOnYourServer@domain.com");
    echo "Your Contact Form message was sent.";
} else {
    echo "Enter details in all Inputs of Contact Form!";
}

?>