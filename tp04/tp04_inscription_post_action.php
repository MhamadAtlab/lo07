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
            <div class="panel-heading">Traitement en PHP d'un formulaire (méthode POST)</div>
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
                            if(isset($_POST["nom"]))
                            {printf('<tr><td>nom</td><td>%s</td></tr>',$_POST["nom"]);}
                            if(isset($_POST["prenom"]))
                            {printf('<tr><td>prenom</td><td>%s</td></tr>',$_POST["prenom"]);}
                            if(isset($_POST["email"]))
                            {printf('<tr><td>email</td><td>%s</td></tr>',$_POST["email"]);}
                            if(isset($_POST["date_naissance"]))
                            {printf('<tr><td>date_naissance</td><td>%s</td></tr>',$_POST["date_naissance"]);}
                            if(isset($_POST["sexe"]))
                            {printf('<tr><td>sexe</td><td>%s</td></tr>',$_POST["sexe"]);}
                            if(isset($_POST["origine"]))
                            {printf('<tr><td>origine</td><td>%s</td></tr>',$_POST["origine"]);}
                            echo'<tr><td>ST07</td>';
                            if(isset($_POST["ST07"])) echo ('<td>oui</td></tr>');
                            else {echo ('<td>non</td></tr>');}
                            echo'<tr><td>ST09</td>';
                            if(isset($_POST["ST09"])) echo ('<td>oui</td></tr>');
                            else {echo ('<td>non</td></tr>');}
                            echo'<tr><td>ST10</td>';
                            if(isset($_POST["ST10"])) echo ('<td>oui</td></tr>');
                            else {echo ('<td>non</td></tr>');}
                            echo'<tr><td>SE</td>';
                            if(isset($_POST["SE"])) echo ('<td>oui</td></tr>');
                            else {echo ('<td>non</td></tr>');}
                            if(isset($_POST["modules"]))
                            {printf('<tr><td>modules</td><td>%s</td></tr>',implode(', ',$_POST["modules"]));}
                            if(isset($_POST["textarea"]))
                            {printf('<tr><td>textarea</td><td>%s</td></tr>',$_POST["textarea"]);}
                            echo '</tbody></table>';
                    ?>
            <div class="panel panel-info">
                <div class="panel-heading">Mes réponses aux questions</div>
                <div class="panel-body">Liste des questions de la section 2.5</div>
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
                    <td class="col-sm-6">Questions 5.1</td>
                    <td class="col-sm-6">Contrairement au GET, Post ne modifie pas l'URL (URL ne contient pas aucun valeur envoyer par la methode "POST")
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-6">Questions 5.2</td>
                    <td class="col-sm-6">Envoie de données confidentielles (mot de passe, numéro de carte bancaire,...)</td>
                </tr>
            </tbody></table>
    </body>
</html>
