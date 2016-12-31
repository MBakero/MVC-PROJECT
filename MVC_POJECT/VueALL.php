<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/23/2016
 * Time: 1:31 AM
 */

require_once 'Vue.php';
require_once 'ModeleClients.php';

class VueALL extends Vue
{

    public function __construct($title) {
        parent::__construct($title);
        $this->content.="
                        <div align='center'>
                        <h1>Liste des clients</h1><br>
                        <table border=1 align=center class='table table-striped table-hover'>
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Suppression</th>
                                <th>Modifier</th>
                                <th>Affichage</th>
                            </tr>
                            </thead>";}


    public function all($clients) {
        foreach ($clients as $client) {
            $this->content.="<tr class=>
                                <td>$client[0]</td>
                                <td>$client[1]</td>
                                <td>$client[2]</td>";
            $this->content.= "<td align=center ><a href=Controller.php?action=del&num=" .$client[0]. "><img src='images/drop.png' height='25' width='25'></a></td>";
            $this->content.= "<td align=center><a href=Controller.php?action=update&num=" .$client[0]. "><img src='images/edit.png' height='25' width='25'></a></td>";
            $this->content.= "<td align=center><a href=Controller.php?action=one&num=" .$client[0]. "><img src='images/view.png' height='25' width='25' alt='afficher'></a></td>";
            $this->content.="</tr>";
    }
        $this->content.="<tr class='info'><th colspan='6'>Nombre de clients : ".count($clients)."</tr></table>";
        $this->content.= "<a href='Controller.php?action=new' class='btn btn-danger' style='color: black'>Ajouter client</a></div>";
}

}