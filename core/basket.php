<?php

class Basket
{
    //Récupérer toutes les offres
    public function getAll()
    {
      //On définit la bdd pour la fonction
      global $bdd;
      $basket = $bdd->query('SELECT * FROM basket')->fetchAll(PDO::FETCH_ASSOC);
      return ($basket);
    }

    //Récupérer plus d'info sur 1 offre
    public function getOne($id_basket)
    {
      global $bdd;
      $basket = $bdd->query('SELECT * FROM basket WHERE id = '.$id_basket.' ')->fetch(PDO::FETCH_ASSOC);
      return ($basket);
    }
    //Ajoter une offre
    public function Add($data)
    {
      // Créer la connexion a la base + traitement des données + Sauvegarde en BDD
    }
}

?>