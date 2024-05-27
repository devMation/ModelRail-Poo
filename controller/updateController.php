<?php
// var_dump($_POST);


// die();


// Chemins absolus vers les fichiers requis
require_once dirname(__DIR__) . '/Class/Products.php';

require_once '../render/render.php';
// Vérification si le paramètre 'id' est présent dans l'URL


// Lecture des articles
$article = new Products();
$getArticle = new Products();
// var_dump($getArticle->getDataForm());


// Vérifier si l'ID est passé dans l'URL






// Rendu de la vue avec les articles
render('update', ['articles' => $article->update(), 'articlesGet' => $getArticle->getDataForm()]);