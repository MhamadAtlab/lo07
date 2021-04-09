<?php
    session_start();
    $_SESSION["nom_prenom"]="vos nom et prénom";
    $_SESSION["module"]="tableau de vos modules du semestre";
    require ('lo07_biblio_formulaire_bt.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body class="container">
        <?php
        echo make_panel("tp06_e4_session", "success","<a href='http://localhost/TP/tp06/lo07_analyse_superglobales.php'>lo07_analyse_superglobales.php</a>");
        ?>
    </body>
</html>
