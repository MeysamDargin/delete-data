<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "tibaismartcompany@gmail.com";
    $subject = "Justus Account Deletion Request";

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $body = "You have received a new account deletion request:\n\n";
    $body .= "Justus Username: $username\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your request has been sent successfully.";
    } else {
        echo "There was a problem sending your request. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
