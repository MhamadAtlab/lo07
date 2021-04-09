<?php
require ('lo07_biblio_formulaire_bt.php');
setcookie("email","votre email");
setcookie("pays","votre pays");
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
        echo make_panel("tp06_e3_cookie2", "success","<a href='http://localhost/TP/tp06/lo07_analyse_superglobales.php'>lo07_analyse_superglobales.php</a>");
        ?>
    </body>
</html>
