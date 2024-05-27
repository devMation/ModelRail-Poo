<?php


require_once dirname(__DIR__) . '/Class/Products.php';


// Lecture des articles
$delete = new Products;
$delete->delete();

header('location: ../controller/list-articleController.php');

 

// Rendu de la vue