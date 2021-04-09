<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="tp03_css.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include 'php_code.php'; ?>
        <div class="container">
            <nav class="navbar navbar-fixed-top navbar-inverse ">
                    <div class="navbar-header navbar-brand">Web 03</div>
                    <ul class="nav navbar-nav">
                        <li class="active"> <a href="#exercice1">Exercice 1</a></li>
                        <li class="active"><a href="#exercice2">Exercice 2</a></li>
                        <li class="active"><a href="#exercice3">Exercice 3</a></li>
                        <li class="active"><a href="#exercice4">Exercice 4</a></li>
                        <li class="active"><a href="#exercice5">Exercice 5</a></li>
                    </ul>
            </nav>
            <div class="panel-group">
                <div class="panel panel-success" id="exercice1">
                      <div class="panel-heading">Exercice 1: validation de la configuration div-isi</div>
                      <div class="panel-body"><?php echo $exercice1 ?></div>
                </div>
                <!-- Exercice 1.7 : url = http://localhost/TP/tp03/tp03_into_php.php -->


                <div class="panel panel-primary" id="exercice2">
                    <div class="panel-heading">Exercice 2</div>
                    <div class="panel-body">
                        <ul class="list-group">
                        <li class="list-group-item">Nom = <?php echo $nom?></li>
                        <li class="list-group-item">Prénom = <?php echo  $prenom?></li>
                        <li class="list-group-item">Age = <?php echo $age?></li>
                        <li class="list-group-item">Ingénieur = <?php echo $ingenieur?></li>
                  </ul>
                    </div>
                </div>
                <!-- dans le navigateur web, le php n'est pas écrit dans la source code (tp03_intro_php.php)
                    Le php est traduit sur me serveur et t'est donc envoyer en langage simple.
                    -->

                <div class="panel panel-success" id="exercice3">
                    <div class="panel-heading">Exercice 3: tableau des capitales d'afrique</div>
                    <div class="panel-body">
                        <h3>print_r </h3>
                        <pre><?php print_r($capitalesAfrique) ?></pre>

                        <!-- exercice 3.5 -->

                        <h3>foreach</h3>
                        <ul class="list-group">
                        <?php foreach ($capitalesAfrique as $value) { ?>
                            <li class="list-group-item">
                                <?php echo $value ?>
                            </li>
                        <?php } ?>
                        </ul>

                        <!-- exercice 3.6 -->

                        <h3>Implode</h3>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <?php echo implode(';', $capitalesAfrique) ?>
                            </div>
                        </div>
                        <h3>Accès aux données</h3>
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                Nombre d'élements = <?php echo count($capitalesAfrique) ?>
                            </div>
                            <div class="panel-heading">
                                Tableau trié = <?php sort($capitalesAfrique);echo implode(';',$capitalesAfrique) ?>
                            </div>
                        </div>
                      </div>
                </div>

                <!-- exercice 4 -->

                <div class="panel panel-primary" id="exercice4">
                    <div class="panel-heading">
                        Exercice 4: tableaux associatifs
                    </div>
                    
                    <div class="panel-body">
                        <!-- exercice4.2
                        La capitale de l'Allemagne est <php echo $capitalesEurope["Allemagne"] >
                        -->

                    <!-- Exercice 4.3 : si on ajoute le couple (France,Troyes) l'array prend la derniere valeur de France 
                        danc dans ce cas la valeur de $capitalesEurop["France"]=Troyes -->

                        <h3>foreach</h3>
                        <ul class="list-group">
                            <?php foreach ($capitalesEurope as $x=> $value) { ?>
                                <li class="list-group-item">
                                    <?php echo "Key=" . $x . ", Value=" . $value; ?>
                                </li>
                            <?php } ?>
                        </ul>
                        <h3>La liste des clés</h3>
                        <ul class="list-group">
                            <?php foreach ($capitalesEurope_keys as $value) { ?>
                                <li class="list-group-item">
                                    <?php echo $value; ?>
                                </li>
                            <?php } ?>
                        </ul>
                        <h3>La liste des valeurs</h3>
                        <ul class="list-group">
                            <?php foreach ($capitalesEurope_values as $x=> $value) { ?>
                                <li class="list-group-item">
                                    <?php echo $value; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <!-- exercice 5 -->
                <div class="panel panel-success" id="exercice5">
                    <div class="panel-heading">
                        Exercice 5 : fonctions
                    </div>
                    <div class="panel-body">
                        <?php 
                            echo badge_danger("web", 6)."<br>";
                            foreach ($capitalesAfrique as $value) {
                                echo badge_danger($value, strlen($value));
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
