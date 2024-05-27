<?php
// require_once '../libs/database.php';
require_once __DIR__ . '/ConnexionDatabase.php';
$Connect = new ConnexionDatabase();
$Connect->getConnexion();




class Products
{
    public function create($data)
    {
        $Connect = new ConnexionDatabase();
        $pdo = $Connect->getConnexion();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['prix']) && $_POST['image']) {
                $nom = $_POST['nom'];
                $description = $_POST['description'];
                $prix = $_POST['prix'];
                $image = $_POST['image'];
                // Préparation de la requête d'insertion
                $prep = $pdo->prepare("INSERT INTO produit (nom, description, prix, image) VALUES (?, ?, ?, ?)");

                // Exécution de la requête avec les valeurs en paramètres
                $articles = $prep->execute([$nom, $description, $prix, $image]);
                return $articles;
            }
            header('location: ../controller/list-articleController.php');
        }
    }



    // create


    public function read()
    {

        $Connect = new ConnexionDatabase();
        $pdo = $Connect->getConnexion();

        // Exécute la requête SQL
        $reqSql = "SELECT * FROM produit";
        $exe = $pdo->query($reqSql);

        // Récupère les résultats de la requête dans un tableau
        $articles = $exe->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
    }

    public function update()
    {
        $Connect = new ConnexionDatabase();
        $pdo = $Connect->getConnexion();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Récupérer l'ID du formulaire POST

            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];
            $image = $_POST['image'];
            $id = $_POST['id'];

            // Préparer la requête SQL avec tous les paramètres
            $req = $pdo->prepare("UPDATE produit SET nom = ?, description = ?, prix = ?, image = ? WHERE id = $id");

            // Exécuter la requête avec les variables
            $articles = $req->execute([$nom, $description, $prix, $image]);

            // Rediriger après la mise à jour réussie
            if ($articles) {
                header('Location: ../controller/list-articleController.php');
                exit(); // Assurez-vous que le script s'arrête après la redirection
            }

            // Si la mise à jour échoue, renvoyer une indication d'échec
        }
    }



    public function delete()
    {
        $Connect = new ConnexionDatabase();
        $pdo = $Connect->getConnexion();
        if (isset($_GET['id'])) {
            $id = htmlspecialchars($_GET['id']);
            $req = $pdo->prepare("DELETE FROM produit WHERE id = ? LIMIT 1");
            $req->execute([$id]);
            $post = $req->fetch();
        }
    }


    public function detail()
    {

        $Connect = new ConnexionDatabase();
        $pdo = $Connect->getConnexion();
        $id = $_GET['id'];

        // Préparer et exécuter la requête pour obtenir les détails de l'article
        $stmt = $pdo->prepare('SELECT * FROM produit WHERE id = ?');
        $stmt->execute([$id]);
        $article = $stmt->fetch(PDO::FETCH_ASSOC);
        return $article;
    }



    public function AjoutPanier()
    {
    }


    public function getDataForm()
    {
        $Connect = new ConnexionDatabase();
        $pdo = $Connect->getConnexion();

        $reqSql = "SELECT * FROM produit";
        $exe = $pdo->query($reqSql);
        // Récupère les résultats de la requête dans un tableau
        $articlesGet = $exe->fetchAll(PDO::FETCH_ASSOC);


        // Trouver l'article correspondant dans le tableau $articlesGet


        return $articlesGet;
    }
}
