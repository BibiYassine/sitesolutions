<?php
// Autoload PHPMailer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if ($name && $email && $message) {
        // Maak een nieuwe PHPMailer instantie
        $mail = new PHPMailer(true);

        try {
            // SMTP instellingen
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // SMTP-server (bijvoorbeeld Gmail)
            $mail->SMTPAuth = true;
            $mail->Username = 'sitesolutions.contact@gmail.com'; // Vervang met jouw Gmail-adres
            $mail->Password = 'recdlavkooezxomt'; // Vervang met jouw Gmail-wachtwoord of app-wachtwoord
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Afzender en ontvanger
            $mail->setFrom($email, $name);
            $mail->addAddress('sitesolutions.contact@gmail.com', 'Site Solutions'); // Doeladres

            // E-mail inhoud
            $mail->isHTML(false);
            $mail->Subject = 'Nieuw contactbericht';
            $mail->Body = "Naam: $name\nE-mail: $email\n\nBericht:\n$message";

            // Verstuur e-mail
            $mail->send();
            echo "<p>Bericht succesvol verzonden!</p><br> <a href='index'>Terug naar de website</a>";
        } catch (Exception $e) {
            echo "Bericht kon niet worden verzonden. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Alle velden zijn verplicht en het e-mailadres moet geldig zijn.";
    }
} else {
    echo "Ongeldige aanvraag.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succesvol Bericht - Site Solutions</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;

            background-image: url('images/bg.png');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        a {
            color: black;
            text-decoration: none;
        }
        a:hover{
            color: #A79976;
        }
    </style>
</body>
</html>
