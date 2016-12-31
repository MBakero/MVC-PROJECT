<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/24/2016
 * Time: 10:37 PM
 */
require_once 'Vue.php';
require_once 'ModeleProduits.php';

class VueAllProduits extends Vue
{

    public function __construct($title) {
        parent::__construct($title);
        $this->content.="
                    <div align='center'>
                        <h1>Liste des Produits</h1><br>

                        <table border=1 align=center class='table table-striped table-hover'>
                            <thead>
                                <tr>
                                <th>Num</th>
                                <th>Designation</th>
                                <th>Categorie</th>
                                <th>Suppression</th>
                                <th>Modifier</th>
                                <th>Affichage</th>
                                </tr>
                            </thead>";}

    public function all($produits) {
        foreach ($produits as $produit) {
            $this->content.="<tr>
                                <td>$produit[0]</td>
                                <td>$produit[1]</td>";
            if($produit[2] == '1') $this->content.= "<td>PHONE</td>>";
            if($produit[2] == '2') $this->content.= "<td>LAPTOP</td>>";
            $this->content.= "<td align=center><a href=Controller.php?action=delprdt&num=" .$produit[0]. "><img src='images/drop.png' height='25' width='25'></a></td>";
            $this->content.= "<td align=center><a href=Controller.php?action=updateprdt&num=" .$produit[0]. "><img src='images/edit.png' height='25' width='25'></a></td>";
            $this->content.= "<td align=center><a href=Controller.php?action=oneprdt&num=" .$produit[0]. "><img src='images/view.png' height='25' width='25' alt='afficher'></a></td>";
            $this->content.="</tr>";
        }
        $this->content.="<tr class='success'><th colspan='6'>Nombre de produits : ".count($produits)."</tr></table>";
        $this->content.= "<a href='Controller.php?action=newprdt' class='btn btn-danger' style='color: black'>Ajouter produit</a></div>";
    }
}