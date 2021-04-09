<?php
require ('lo07_biblio_formulaire_bt.php');
require ('lo07_biblio_planning.php');
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
        foreach (Uni_arr() as $key => $value) {
        form_begin("tp06_1", "get", "tp06_e2_hidden_page2.php");
        form_input_hidden($key, $value);
        form_input_submit($key);
        form_end();
        }
        ?>
    </body>
</html>
