<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Vue/css/ficheAcueil.css" rel="stylesheet" type="text/css"/>
        <script src="libs/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Vue/Commun/menu.php';
        ?>
        <div class="container" id="connexion">
            <form>
                <fieldset>
                    <div class="form-group mb-2 mt-2">
                        <label for="login">Login :</label>
                        <input type="text" class="form-control champs-saisie" id="login" name="login">
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="pwd">Mot de passe :</label>
                        <input type="password" class="form-control champs-saisie" id="pwd">
                    </div>
                    <div class="checkbox mb-3 mt-3">
                        <label>
                            <input type="checkbox">
                            &nbsp
                            Mémoriser</label>
                    </div>
                    <div style="float: right">
                        <button type="submit" class="btn btn-primary ">Connexion</button> 
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
