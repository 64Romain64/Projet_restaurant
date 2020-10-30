
<?php
 $serveur = "localhost";
 $dbname = "gestion_formulaire_contact";
 $user = "root";
 $pass = "GNTHrmn";


// Les données en provenance du formulaire
$date = $_POST['date'];
$heure = $_POST['heure'];
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['numero'];
$nombre = $_POST['nombre'];


 // Connexion à la BDD
 $conn = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8mb4", $user, $pass, []);

 $sql = "INSERT INTO reservation(date,heure,email,nom,prenom,numero,nombre) VALUES (:date, :heure, :email, :nom, :prenom, :numero, :nombre)";

 // Insertion des données
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':heure', $heure);
    $stmt->bindParam(':email', $email);   
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->execute();

?>
<<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style1.css" />
    <script src="main.js"></script>
    <script type="text/javascript" src="java.js"></script>
    <title>La fabrique du petit mangé</title>
</head>

<body>
    <center>
        <p class="titre">MERCI D'AVOIR RESERVE DANS NOTRE RESTAURANT</p>
        <div>
            <a href="index.html">Retour</a>
        </div>
    </center>
</body>