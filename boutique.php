<?php

//1.  Initialisation du stock

$articles = [" sweat-shirt", " T-shirts", " pull", " bonnets", " jupes"];

for ($i = 0; $i < count($articles); $i++) {
    echo $articles[$i] . "\n";
}


foreach ($articles as $article) {
    echo $article . "\n";
}

//2.  Gestion des Stocks

$quantites = [12, 25, 4, 9, 9];
for ($i = 0; $i < count($articles); $i++) {
    echo " $articles[$i] possède $quantites[$i] articles en stock\n";
    }

//3.  Réalisation d'une Vente

$articleChoisi = (int) readline("Choisissez un article  (entre 0 à 4) : ");
$quantiteVendue = (int) readline("Combien d'atricle choisissez vous ? ");
if ($quantiteVendue <= $stockDisponible) {
    $quantites[$indexChoisi] -= $quantiteVendue;
    echo " la commande de $quantiteVendue article a été confirmé. il reste : " . $quantites[$indexChoisi] . ".\n";
} else {
    echo "Stock insuffisant.Seulement $stockDisponible article disponible'.\n";
}

//4.  Réapprovisionnement du Stock

$articleChoisi = (int) readline("Choisissez un article  (entre 0 à 4) : ");
$quantiteAjouter = (int) readline("Combien d'atricle choisissez vous ajoutez ? ");
$quantites[$articleChoisi] += $quantiteAjouter;
echo "le nouveau stock est $quantites[$articleChoisi]";


//5.  Synthèse et Affichage du Stock

for ($i = 0; $i < count($articles); $i++) {
    $message = $quantites[$i] === 0 ? " Rupture de stock" : "Stock: " . $quantites[$i];
    echo "$articles[$i] ne possede plus que $quantites[$i] article en stock\n";
}


//6.  Suivi des Ventes Totales par Article

$ventes = [0, 0, 0, 0, 0];

for ($i = 0; $i < count($articles); $i++) {
    $ventes[$i] = readline("Combien de '$articles[$i]' ont été vendus ? ");
}

for ($i = 0; $i < count($articles); $i++) {
    echo "$articles[$i] a été Vendu  $ventes[$i] fois\n";
}



//7.  Suppression d'un Article 

$articleChoisi = (int) readline(" choisir un article à supprimer (entrer l'index) ")

if ($indexChoisi >= 0 && $indexChoisi < count($articles)) {
    array_splice($articles, $indexChoisi, 1);
    array_splice($quantites, $indexChoisi, 1);
    array_splice($ventes, $indexChoisi, 1);
}

    echo "L'article '$articles[$indexChoisi]' a été supprimé.\n";

 for ($i = 0; $i < count($articles); $i++) {
    echo $articles[$i] . "\n";
}
for ($i = 0; $i < count($quantites); $i++) {
    echo $quantites[$i] . "\n";
}

