<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/24/2016
 * Time: 8:26 PM
 */
require_once 'Vue.php';
require_once 'ModeleClients.php';

class VueNew extends Vue
{

    public function __construct($title) {
        parent::__construct($title);
        $this->content.= "<h1 align='center'>Ajout d'un client</h1><br>
        <table border=1 align=center class='table table-striped table-hover'>
        <form action='Controller.php'>
        <tr>
        <input type='hidden' name='action' value='add'>
        </tr>
        <tr>
        <div class=\"form-group\">
            <label class=\"control-label\" for=\"focusedInput\">Nom</label>
            <input class=\"form-control\" id=\"focusedInput\" type=\"text\" name='Nom' placeholder='Saisir votre nom' \">
        </div>
        </tr>
        <tr>
        <div class=\"form-group\">
            <label class=\"control-label\" for=\"focusedInput\">Prenom</label>
            <input class=\"form-control\" id=\"focusedInput\" type=\"text\" name='Prenom' placeholder='Saisir votre prenom' \">
        </div>
        </tr>
         <tr>
       <td colspan=\"2\" align='center'><button type=\"submit\" class=\"btn btn-primary\">Ajouter</button></td>
        </tr>
        </form>
         ";
    }
}