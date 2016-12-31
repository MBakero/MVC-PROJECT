<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/24/2016
 * Time: 9:12 PM
 */

require_once 'ModeleClients.php';
require_once 'Vue.php';
class VueOne extends Vue
{
    public function __construct($title)
    {
        parent::__construct($title);
        $this->content .= "<h1>Informations du client</h1><br><table border=1 align=center class='table'>

        ";
    }
    public function one($client){
        $this->content.="
        <tr>
        <th>Num</th>
        <td>".$client[0]['num']."</td>
        </tr>
        <tr>
        <th>Nom</th>
       <td>".$client[0]['Nom']."</td>
        </tr>
        <tr>
        <th>Prenom</th>
       <td> ".$client[0]['Prenom']."</td>
        </tr>

        </form>";}

}