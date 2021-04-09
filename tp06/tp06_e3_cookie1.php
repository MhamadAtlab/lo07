<?php
require ('lo07_biblio_formulaire_bt.php');
setcookie("nom","votre nom");
setcookie("prénom","votre prénom");
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
        make_table($_COOKIE);
        ?>
    </body>
</html>
