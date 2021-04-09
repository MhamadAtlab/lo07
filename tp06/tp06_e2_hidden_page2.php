<?php
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
        $x="http://localhost/TP/tp06/lo07_analyse_superglobales.php?";
        foreach ($_GET as $key => $value) {
            $x .=$key."=".$value."&";
        }
        $y='<a href="'.$x.'">'.$x.'</a>';
        echo make_panel("tp06_hidden_page2", "success",$y);
        ?>
    </body>
</html>
