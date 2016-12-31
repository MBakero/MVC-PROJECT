<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/25/2016
 * Time: 12:55 AM
 */
require_once 'Modele.php';
class ModeleClients extends Modele
{

    private $db;

    public function __construct() {
        parent::__construct();
        define('user',"root");
        //define('pass',"");
        $this->db = new PDO('mysql:host=localhost;dbname=MVC_TEST',user,"");
    }

    public function select_clients() {
        $query=$this->db->prepare('SELECT num, nom,prenom FROM clients');
        $query->execute();
        return $query->fetchAll();
    }

    public function insert_client($client) {

        $query=$this->db->prepare('INSERT INTO clients (nom,prenom) VALUES (?,?)');
        //var_dump($client);
        $query->execute($client);
    }

    public function delete_client($num) {
        $query=$this->db->prepare('DELETE FROM clients WHERE num = ? ');
        $query->execute($num);

    }

    public function select_client($num) {
        $query=$this->db->prepare('SELECT * FROM clients where num = ?');
        $query->execute($num);
        return $query->fetchAll();
    }

    public function update_client($client) {
        $query=$this->db->prepare('UPDATE clients set Nom = ?, Prenom = ? WHERE num = ?');
        $query->execute($client);
    }
}