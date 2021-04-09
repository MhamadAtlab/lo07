<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
        <title>title</title>
    </head>
    <body class="container">
        <div class="panel panel-success" id="exercice3">
            <div class="panel-heading">Traitement en PHP d'un formulaire (méthode GET)</div>
                <div class="panel-body">
                    Liste des paramètres reçus
                </div>
        </div>
                    <?php
                    echo('<table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th scope="col">name</th>
                                  <th scope="col">valeur(s)</th>
                                </tr>
                            </thead>
                            <tbody>');
                            if(isset($_GET["nom"]))
                            {printf('<tr><td>nom</td><td>%s</td></tr>',$_GET["nom"]);}
                            if(isset($_GET["prenom"]))
                            {printf('<tr><td>prenom</td><td>%s</td></tr>',$_GET["prenom"]);}
                            if(isset($_GET["email"]))
                            {printf('<tr><td>email</td><td>%s</td></tr>',$_GET["email"]);}
                            if(isset($_GET["date_naissance"]))
                            {printf('<tr><td>date_naissance</td><td>%s</td></tr>',$_GET["date_naissance"]);}
                            if(isset($_GET["sexe"]))
                            {printf('<tr><td>sexe</td><td>%s</td></tr>',$_GET["sexe"]);}
                            if(isset($_GET["origine"]))
                            {printf('<tr><td>origine</td><td>%s</td></tr>',$_GET["origine"]);}
                            echo'<tr><td>ST07</td>';
                            if(isset($_GET["ST07"])) echo ('<td>oui</td></tr>');
                            else {echo ('<td>non</td></tr>');}
                            echo'<tr><td>ST09</td>';
                            if(isset($_GET["ST09"])) echo ('<td>oui</td></tr>');
                            else {echo ('<td>non</td></tr>');}
                            echo'<tr><td>ST10</td>';
                            if(isset($_GET["ST10"])) echo ('<td>oui</td></tr>');
                            else {echo ('<td>non</td></tr>');}
                            echo'<tr><td>SE</td>';
                            if(isset($_GET["SE"])) echo ('<td>oui</td></tr>');
                            else {echo ('<td>non</td></tr>');}
                            if(isset($_GET["modules"]))
                            {printf('<tr><td>modules</td><td>%s</td></tr>',implode(', ',$_GET["modules"]));}
                            if(isset($_GET["textarea"]))
                            {printf('<tr><td>textarea</td><td>%s</td></tr>',$_GET["textarea"]);}
                            echo '</tbody></table>';
                    ?>
            <div class="panel panel-info">
                <div class="panel-heading">Mes réponses aux questions</div>
                <div class="panel-body">Liste des questions de la section 2.7</div>
              </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th scope="col">Questions</th>
                      <th scope="col">Réponses</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-6">Questions 7.1</td>
                        <td class="col-sm-6">rien ne s'affiche (valeur vide).</td>
                    </tr>
                    <tr>
                        <td class="col-sm-6">Questions 7.2</td>
                        <td class="col-sm-6">if faut ajouter [] au variable "name=nom[]" (comme modules dans ce tp).</td>
                    </tr>
                    <tr>
                        <td class="col-sm-6">Questions 7.3</td>
                        <td class="col-sm-6">avec la variable SuperGlobale $_GET qui est un tableau contenant tous les element du formulaire.</td>
                    </tr>
                    <tr>
                        <td class="col-sm-6">Questions 7.4</td>
                        <td class="col-sm-6">http://localhost/TP/tp04/tp04_inscription_get_action.php?nom=Atlab&prenom=Mhamad&email=mhamad_ali.atlab1%40utt.fr&date_naissance=2001-01-21&sexe=M&origine=DUT+autre&modules%5B%5D=gl02&textarea=Bonjour+...
                            <br>
                            <b>je vais modifier nom, prénom, date de naissance et sexe.</b>
                            <br>
                            http://localhost/TP/tp04/tp04_inscription_get_action.php?nom=Hassan&prenom=Ali&email=mhamad_ali.atlab1%40utt.fr&date_naissance=2000-09-08&sexe=F&origine=DUT+autre&modules%5B%5D=gl02&textarea=Bonjour+...
                        </td>
                    </tr>
                    <tr>
                        <td class="col-sm-6">Questions 7.5</td>
                        <td class="col-sm-6">si on ecrit if(isset($_GET["name"]){printf.....} rien ne se passe,si non une erreur php apparait.</td>
                    </tr>
                </tbody></table>
    </body>
</html>
