<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/25/2016
 * Time: 2:28 AM
 */
require_once 'Vue.php';
require_once 'ModeleProduits.php';

class VueNewPoduit extends Vue
{
    public function __construct($title) {
        parent::__construct($title);
        $this->content.= "<h1 align='center'>Ajout d'un produit</h1><br>
        <table border=1 align=center class='table table-striped table-hover'>
        <form action='Controller.php'>
        <tr>
        <input type='hidden' name='action' value='addprdt'>
        </tr>
        <tr>
        <div class=\"form-group\">
            <label class=\"control-label\" for=\"focusedInput\">Designation :</label>
            <input class=\"form-control\" id=\"focusedInput\" type=\"text\" name='Designation' placeholder='Saisir la designation du produit' \">
        </div>
        </tr>
        <tr>
        <div class=\"form-group\">
            <label class=\"control-label\" for=\"focusedInput\">Categorie :</label>
            <input class=\"form-control\" id=\"focusedInput\" type=\"text\" name='Categorie' placeholder='Saisir la categorie du produit' \">
        </div>
        </tr>
        <tr>
        <div class=\"form-group\">
            <label class=\"control-label\" for=\"focusedInput\">Prix :</label>
            <input class=\"form-control\" id=\"focusedInput\" type=\"text\" name='Prix' placeholder='Saisir le prix du produit' \">
        </div>
        </tr>
         <tr>
       <td colspan=\"2\" align='center'><button type=\"submit\" class=\"btn btn-primary\">Ajouter</button></td>
        </tr>
        </form>";
    }
}