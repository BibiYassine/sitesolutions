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
            echo "Bericht succesvol verzonden!";
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
