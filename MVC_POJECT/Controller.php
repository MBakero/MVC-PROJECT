<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/23/2016
 * Time: 1:23 AM
 */

require_once 'ModeleClients.php';
require_once 'ModeleProduits.php';
require_once 'VueALL.php';
require_once 'VueNew.php';
require_once 'VueUpdate.php';
require_once 'VueOne.php';
require_once 'VueAllProduits.php';
require_once 'VueNewPoduit.php';

class Controller
{

    private $action;
    private $modeleClients;
    private $modeleProduits;
    private $vue;

    public function __construct()
    {
        $this->modeleClients = new ModeleClients();
        $this->modeleProduits = new ModeleProduits();
        $this->action = "all";

    }
        //  @Clients Manager.
    public function allAction()
    {
        $clients= $this->modeleClients->select_clients();
        $this->vue= new vueAll("Listes des clients");
        $this->vue->all($clients);
        $this->vue->afficher();
        //print_r($clients);
    }

    public function newAction() {
        $this->vue=new VueNew("new");
        $this->vue->afficher();
    }

    public function addAction() {
        $client=$_GET;
        unset($client['action']);
        $clients = array_values($client);
        $this->modeleClients->insert_client($clients);
        header('location:Controller.php');
    }

    public function delAction() {
        $num=$_GET['num'];
        $this->modeleClients->delete_client(array($num));
        header('location:Controller.php');
    }

    public function updateAction() {
        $num=$_GET['num'];
        $client=$this->modeleClients->select_client(array($num));
        //var_dump($client);
        $this->vue=new VueUpdate("update");
        $this->vue->one($client);
        $this->vue->afficher();
    }

    public function valupdateAction()
    {
        $client = $_GET;
        var_dump($client);
        $this->modeleClients->update_client(array($client['Nom'],$client['Prenom'],$client['num']));
        header('location:Controller.php');
    }

    public function oneAction() {
        $num=$_GET['num'];
        $client=$this->modeleClients->select_client(array($num));
        //var_dump($client);
        $this->vue=new VueOne("one");
        $this->vue->one($client);
        $this->vue->afficher();
    }

        //  @Produits Manager.
    public function allActionProduits()
    {
        $produits = $this->modeleProduits->select_produits();
        //var_dump($produits);
        $this->vue= new VueAllProduits("Listes des produits");
        $this->vue->all($produits);
        $this->vue->afficher();
        //print_r($clients);
    }

    public function newProduit() {
        $this->vue= new VueNewPoduit("new");
        $this->vue->afficher();
    }

    public function addProduit() {
        $produit=$_GET;
        unset($produit['action']);
        $produits = array_values($produit);
        //var_dump($produits);
        $this->modeleProduits->insert_produit($produits);
        header('location:Controller.php?action=allprdts');
    }

    public function delProduit() {
        //var_dump($_GET);
        $num=$_GET['num'];
        $this->modeleProduits->delete_produit(array($num));
        echo 2;
        header('location:Controller.php?action=allprdts');
    }

    public function updateProduit() {
        $num=$_GET['num'];
        $client=$this->modeleProduits->select_produits(array($num));
        //var_dump($client);
        $this->vue=new VueUpdate("update");
        $this->vue->one($client);
        $this->vue->afficher();
    }


    public function action() {
        $action="all";
        if(isset($_GET['action'])) $action=$_GET['action'];
        if(isset($_POST['action'])) $action=$_POST['action'];
        switch($action) {
            case 'all' : $this->allAction();
                break;
            case 'new' : $this->newAction();
                break;
            case 'add' : $this->addAction();
                break;
            case 'del' : $this->delAction();
                break;
            case 'update' :
                $this->updateAction();
                break;
            case 'valupdate' :
                $this->valupdateAction();
                break;
            case 'one' :
                $this->oneAction();
                break;

            case 'allprdts' : $this->allActionProduits();
                break;
            case 'newprdt' : $this->newProduit();
                break;
            case 'addprdt' : $this->addProduit();
                break;
            case 'delprdt' : $this->delProduit();
                break;
            case  'updateprdt' : $this->updateProduit();
                break;
            case 'valupdateprdt' : $this->valupdateProduit();
                break;
            case  'oneprdt' : $this->oneProduit();
                break;

        }
    }

    }

$c=new Controller();
$c->action();
