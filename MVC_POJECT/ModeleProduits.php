<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/24/2016
 * Time: 10:34 PM
 */
require_once 'Modele.php';
class ModeleProduits extends Modele
{
    private $db;

    public function __construct() {

        parent::__construct();
        //define('user',"root");
        //define('pass',"");
        $this->db = new PDO('mysql:host=localhost;dbname=MVC_TEST',"root","");
    }

    public function select_produits() {
        $query=$this->db->prepare('SELECT * FROM produits');
        $query->execute();
        return $query->fetchAll();
    }

    public function select_categorie($ID_Categorie){

        $query=$this->db->prepare("SELECT Categorie FROM Categorie WHERE ID_Categorie =?");
        $query->execute($ID_Categorie);
        return $query->fetchAll();
    }

    public function insert_produit($produit) {

        $query=$this->db->prepare("INSERT INTO `produits`(`Designation`, `ID_Categorie`, `Prix`) VALUES (?,?,?) ;");

       if($produit[1] == 'PHONE') $produit[1] = '1';
        if($produit[1] == 'LAPTOP') $produit[1] = '2';
        $query->execute($produit);

    }

    public function delete_produit($num) {

        $query=$this->db->prepare("DELETE FROM produits WHERE num = ?");
        var_dump($query->execute($num));
    }

    public function update_produit($produit) {
        $query=$this->db->prepare('UPDATE clients set Designation = ?, Categorie = ?, Prix = ? WHERE num = ?');
        $query->execute($produit);
    }
}


