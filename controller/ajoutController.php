<?php


// Chemins absolus vers les fichiers requis
require_once dirname(__DIR__) . '/Class/Products.php';
require_once '../Class/ConnexionDatabase.php';
require_once '../render/render.php';

$Connect = new ConnexionDatabase();
$Connect->getConnexion();

// Lecture des articles
$product = new Products();

render('add', ['products' => $product->create($_POST)]);

// header('location: ../controller/list-articleController.php');