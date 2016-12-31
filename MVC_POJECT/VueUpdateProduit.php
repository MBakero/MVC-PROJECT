<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/25/2016
 * Time: 5:43 AM
 */

require_once 'Vue.php';
require_once 'ModeleProduits.php';
class VueUpdateProduit extends Vue
{

    public function __construct($title)
    {
        parent::__construct($title);
        $this->content .= "<h1>Modification du Produit</h1><br><table border=1 align=center class='table'>
        <form method='GET' action='Controller.php'>
        <input type='hidden' name='action' value='valupdateprdt'>
        ";
    }
    public function one($client){
        $this->content.="
        <tr>
        <th>Num</th>
        <td><input type=\"text\" class=\"form-control\" name='num' value=".$client[0]['num']." readonly></td>
        </tr>
        <tr>
        <th>Designation</th>
       <td> <input type=\"text\" class=\"form-control\" name='Nom' value=".$client[0]['Nom']." placeholder=".$client[0]['Nom']."></td>
        </tr>
        <tr>
        <th>Categorie</th>
       <td> <input type=\"text\" class=\"form-control\" name='Prenom' value=".$client[0]['Prenom']." placeholder=".$client[0]['Prenom']."></td>
        </tr>
        <tr>
       <td colspan=\"2\" align='center'><button type=\"submit\" class=\"btn btn-default\">Modifier</button></td>
        </tr>
        </form>";}
}