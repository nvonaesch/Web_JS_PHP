<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/ficheAcueil.css" rel="stylesheet" type="text/css"/>
        <script src="../../libs/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../../libs/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <title>Fiche renseignements</title>
    </head>
    <body>
        <?php
        require_once '../Commun/menu.php';
        ?>
        <div class="container-fluid contenu">
            <h1>Parcours scolaire</h1>
            <form id="scolarite">
                <fieldset>
                    <legend>Diplôme du baccalauréat :</legend>
                    <div class="row">
                        <div class="mb-3 mt-3 col">
                            <label for="bac" class="form-label">Bac d'origine :</label>
                            <Select class="form-control" id="bac" name="bac">
                                <option value="-1">Sélectionnez votre bac</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3 col">
                            <label for="specialite_1" class="form-label">Spécialité :</label>
                            <Select class="form-control" id="specialite_1" name="specialite_1">
                                <option value="-1">Sélectionnez votre spécialité</option>
                            </select>
                        </div> 
                        <div class="mb-3 mt-3 col">
                            <label for="specialite_2" class="form-label">Deuxième spécialité :</label>
                            <Select class="form-control" id="specialite_2" name="specialite_2">
                                <option value="-1">Sélectionnez votre spécialité</option>
                            </select>
                        </div> 
                        
                    </div>
                    <div class="mb-3 mt-3 col">
                        <label for="activite">Si pas en terminal l'année dernière :</label>
                        <textarea  class="form-control" rows="5" id="activite" name="activite" placeholder="Quelles études, vie active, lieu, etc"></textarea>  
                    </div>
                    <div class="mb-3 mt-3 col">
                        <label for="projet">Projet professionnel :</label>
                        <textarea class="form-control" rows="5" id="projet" name="projet" placeholder="Poursuite d'études, vie active, etc"></textarea> 
                    </div>
                    <div class="mb-3 mt-3" style="float: right">
                        <button type="submit" class="btn btn-primary ">Enregistrer</button> 
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
