<?php

if($_POST["submit"]) {
    $recipient = "ryantrevor42yahoo.com";
    $subject = "Form to email message";
    $sender = $_POST["sender"];
    $senderEmail = $_POST["senderEmail"];
    $message = $_POST["message"];

    $mailBody = "Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou ="<p>Your message has been sent.</p>";
}

?>