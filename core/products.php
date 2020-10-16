<?php

class Products
{
    //Récupérer toutes les offres
    public function getAll()
    {
      //On définit la bdd pour la fonction
      global $bdd;
      $product = $bdd->query('SELECT * FROM Products')->fetchAll(PDO::FETCH_ASSOC);
      return ($product);
    }

    //Récupérer plus d'info sur 1 offre
    public function getOne($id_product)
    {
      global $bdd;
      $product = $bdd->query('SELECT * FROM Products WHERE id = '.$id_product.' ')->fetch(PDO::FETCH_ASSOC);
      return ($product);
    }
    //Ajoter une offre
    public function Add($data)
    {
      // Créer la connexion a la base + traitement des données + Sauvegarde en BDD
    }
}

?>