<?php

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {

// Configuration SMTP Mailtrap
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '7c5d48e2db1f18';
$mail->Password = 'a1ef4ec80504c6';
$mail->Port = 2525;

// Expéditeur
$mail->setFrom('monprojet13@outlook.fr', 'Projet Orientation');

// Destinataire
$mail->addAddress('test@test.com');

// Contenu du mail
$mail->isHTML(true);
$mail->Subject = 'Test Projet Orientation';
$mail->Body = 'Email envoyé avec PHPMailer et Mailtrap';

$mail->send();
echo "Email envoyé avec succès";

} catch (Exception $e) {
echo "Erreur : {$mail->ErrorInfo}";
}

?>
