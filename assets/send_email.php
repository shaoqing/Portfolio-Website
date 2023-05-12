<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "shaoqing@umich.edu";
    $subject = "New message from your website";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        header("Location: success.html");
    } else {
        header("Location: error.html");
    }
}
?>
