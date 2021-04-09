<?php
require ('lo07_biblio_formulaire_bt.php');
?><html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"><b>Information de l'equipe</b></div>
        </div>
        <?php 
            form_begin("lo07", "get", "tp05_tournoi_form2.php");
            form_input_number("Nombre de joueurs de l’équipe (entre 2 et 5) :", "nb_joueurs", 1,2,5, 3);
            form_input_submit("Submit");
            form_end();
            ?>
    </body>
</html>
