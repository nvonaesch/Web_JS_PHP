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
        <title>Stage</title>
    </head>
    <body>
        <?php
        require_once '../Commun/menu.php';
        ?>
        <div class="container-fluid contenu">
            <h1>Convention de stage suite</h1>
            <form id="scolarite">
                <fieldset>
                    <legend>Stage :</legend>
                    <div class="mb-3 mt-3 col">
                        <label for="sujet">Sujet :</label>
                        <textarea class="form-control" id="sujet" name="sujet"></textarea> 
                    </div>
                    <div class="row">
                        <div class="mb-3 mt-3 col">
                            <label for="activite">Activités prévues :</label>
                            <textarea class="form-control"  id="activite" name="activite"></textarea> 
                        </div>
                        <div class="mb-3 mt-3 col">
                            <label for="competence">Compétences développées :</label>
                            <textarea class="form-control" id="competence" name="competence"></textarea> 
                        </div>    
                    </div>
                    <div class="row">
                        <div class="mb-3 mt-3 col">
                            <label for="debut" class="form-label">Du :</label>
                            <input type="date" class="form-control" id="debut"  name="debut">
                        </div> 
                        <div class="mb-3 mt-3 col">
                            <label for="fin" class="form-label">au :</label>
                            <input type="date" class="form-control" id="fin"  name="fin">
                        </div> 
                        <div class="mb-3 mt-3 col">
                            <label for="duree-semaine" class="form-label">Durée en semaines :</label>
                            <input type="number" class="form-control" id="duree-semaine"  name="duree-semaine" value="6">
                        </div>
                        <div class="mb-3 mt-3 col">
                            <label for="duree-jour" class="form-label">Soit le nombre de jours effectifs :</label>
                            <input type="number" class="form-control" id="duree-jour"  name="duree-jour" value="30">
                        </div>
                    </div>
                    <div class="mb-3 mt-3 col">
                        <label for="commentaire">Commentaires :</label>
                        <textarea class="form-control" id="commentaire" name="commentaire"></textarea> 
                    </div>
                    <div class="mb-3 mt-1 col" style="float: right">
                        <input type="button" class="btn btn-primary"  value="Enregistrer" id="enregistrer"> 
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
