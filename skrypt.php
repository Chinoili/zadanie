<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        echo "Wszystkie pola muszą być wypełnione.";
        exit;
    }

    $to = "twoj_email@example.com";
    $subject = "Nowa wiadomość z formularza kontaktowego";
    $body = "Nowa wiadomość od $name ($email):\n\n$message";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";
    if (mail($to, $subject, $body, $headers)) {
        echo "Dziękujemy za wiadomość! Odpowiemy jak najszybciej.";
    } else {
        echo "Wystąpił problem przy wysyłaniu wiadomości. Spróbuj ponownie.";
    }
}
?>
