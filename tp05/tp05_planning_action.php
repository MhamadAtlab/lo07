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
        <title></title>
    </head>
    <body class="container">
        <div class="panel panel-danger" id="exercice3">
            <div class="panel-heading"><b>SuperGlobale GET</b></div>
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
             foreach ($_GET as $key => $value) {
                        if(is_array($value)){
                            printf('<tr><td>%s</td><td>%s</td></tr>',$key,implode(', ',$value));
                        }
                        else {printf('<tr><td>%s</td><td>%s</td></tr>',$key,$value);}
                        }
            echo '</tbody></table>'
        ?>
    </body>
</html>
