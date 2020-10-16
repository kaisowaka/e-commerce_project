<?php

class Customer
{
    //Récupérer toutes les offres
    public function getAll()
    {
      //On définit la bdd pour la fonction
      global $bdd;
      $customer = $bdd->query('SELECT * FROM Customers')->fetchAll(PDO::FETCH_ASSOC);
      return ($customer);
    }

    //Récupérer plus d'info sur 1 offre
    public function getOne($id_customer)
    {
      global $bdd;
      $customer = $bdd->query('SELECT * FROM Customers WHERE id = '.$id_customer.' ')->fetch(PDO::FETCH_ASSOC);
      return ($customer);
    }
    //Ajoter une offre
    public function Add($data)
    {
      // Créer la connexion a la base + traitement des données + Sauvegarde en BDD
    }
}

?>