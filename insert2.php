<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Commentaire envoyé</h1>
        <p>Merci d'avoir partagé vos impressions...</p>
</body>

<?php
 $serveur = "localhost";
 $dbname = "gestion_formulaire_contact";
 $user = "root";
 $pass = "GNTHrmn";


// Les données en provenance du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$commentaire = $_POST['commentaire'];


 // Connexion à la BDD
 $conn = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8mb4", $user, $pass, []);

 $sql = "INSERT INTO livre_or(nom,prenom,commentaire) VALUES (:nom, :prenom, :commentaire)";

 // Insertion des données
    $stmt = $conn->prepare($sql);  
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':commentaire', $commentaire);
    $stmt->execute();

?>