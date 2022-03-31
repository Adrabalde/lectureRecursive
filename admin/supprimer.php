<?php

$id=$_GET['id'];
$nom=$_GET['nom'];

// Configuration base des données
require_once '../db.php'; 

// Supprimer l'image sélectionnée
$sql = "delete FROM fichierrecursive where id='$id'";
// Exécuter la requête 
$resultat=dbQuery($sql);


// redirection 
header('location:index.php');





