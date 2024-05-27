<?php


class ConnexionDatabase

{
    
    public function getConnexion()
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=modeloRail;", "root", "");
            // echo "Connexion reussit";
        } catch (\PDOException $e) {
            echo "ERROR" . $e->getMessage();
        }
        return $pdo;
    }
}