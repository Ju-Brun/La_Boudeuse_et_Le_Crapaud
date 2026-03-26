<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);

    $to = "berseker56700@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de $nom $prenom";
    $body = "Nom: $nom\nPrénom: $prenom\nTéléphone: $tel\nEmail: $email\nSujet: $sujet\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "L'e-mail a été envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'e-mail.";
    }
}
?>