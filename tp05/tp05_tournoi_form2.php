<?php
require ('lo07_biblio_formulaire_bt.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body class="container">
            <?php
            form_begin("lo07", "get", "tp05_tournoi_action.php");
            if(isset($_GET["nb_joueurs"])){
                $n=$_GET["nb_joueurs"];
                for ($i=1;$i<=$n;$i++) {
                            echo '<div class="panel panel-info">';
                            printf('<div class="panel-heading">Joueur %u : </div>',$i);
                            form_input_text("Nom ?",sprintf("nom_%u",$i), 1, sprintf("nom%u",$i));
                            form_input_text("Prénom ?",sprintf("prenom_%u",$i), 1,sprintf("prenom%u",$i));
                            form_input_email("Email ?",sprintf("email_%u",$i), 1, sprintf("email%u@utt.fr",$i));
                           echo '</div>';
                    }
            form_input_submit("envoyer");
            form_end();
            }
            ?>
    </body>
</html>
