if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $wilaya = htmlspecialchars($_POST["wilaya"]);
    $email = htmlspecialchars($_POST["email"]);
    $number = htmlspecialchars($_POST["number"]);
    $quantite = htmlspecialchars($_POST["quantite"]);
    $message = htmlspecialchars($_POST["message"]);

    // Email destinataire
    $destinataire = "boudaoud.fairouz04@gmail.com"; // Remplacez par votre adresse email

    // Sujet de l'email
    $sujet = "Nouvelle commande de $nom";

    // Corps de l'email
    $contenu = "Nom: $nom\n";
    $contenu .= "Wilaya: $wilaya\n";
    $contenu .= "Email: $email\n";
    $contenu .= "Numéro de téléphone: $number\n";
    $contenu .= "Quantité: $quantite\n";
    $contenu .= "Message:\n$message";

    // Envoi de l'email
    $headers = "From: $nom <$email>";
    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "Votre commande a été envoyée avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre commande.";
    }
} else {
    echo "Une erreur s'est produite lors du traitement de votre commande.";
}
?>