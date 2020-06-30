<?php
//fichiers//
include 'affichage.php';
include 'gestion-produit.php';

//variables//
$nom_produit='T-shirt femme';
$couleur='Rouge';
$prix=15.50;
$disponible= true;
$quantite= 10;
$nb_ajout=5;
$nb_achat=5;

//Rendu//

afficher_produit($nom_produit, $couleur, $prix, $disponible);

$nb_achat=achat($quantite, $nb_achat);

$disponible=update_dispo($quantite);

afficher_produit($nom_produit, $couleur, $prix, $disponible);

achat($quantite, $nb_achat);

$disponible=update_dispo($quantite);

afficher_produit($nom_produit, $couleur, $prix, $disponible);

restockage($quantite, $nb_ajout);

$disponible=update_dispo($quantite);

afficher_produit($nom_produit, $couleur, $prix, $disponible);

?>
