<?php
 // Connexion à la base de données
 $conn = new PDO("mysql:host=localhost;dbname=gestion_formulaire_contact;charset=utf8mb4", "root", "GNTHrmn", []);

 // Requête SQL + envoi
 $stmt = $conn->prepare("SELECT * FROM reservation");
 $stmt->execute();

 // Récupération de tous les enregistrements sous forme de tableau associatif
$reservation = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($reservation);