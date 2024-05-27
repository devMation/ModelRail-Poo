<?php
// Chemins absolus vers les fichiers requis
require_once dirname(__DIR__) . '/Class/Products.php';
require_once '../render/render.php';

// Lecture des articles
$article = new Products;

// Rendu de la vue
render('accueil', ['articles' => $article->read()]);
