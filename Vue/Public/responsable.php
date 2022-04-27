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
            <h1>Informations concernant le responsable légal</h1>
            <form id="responsable">
                <fieldset>
                    <legend>Responsable(s) légal(s) :</legend>
                    <div class="row">
                        <div class="mb-3 mt-3 col">
                            <label for="nom" class="form-label">Nom :</label>
                            <input type="text" class="form-control" id="nom" placeholder="Entrez le nom" name="nom">
                        </div>
                        <div class="mb-3 mt-3 col">
                            <label for="prenom" class="form-label">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" placeholder="Entrez le prénom" name="prenom">
                        </div> 
                    </div>    
                    <div class="mb-1 mt-3 col">
                        <label for="adresseIdentique" class="form-label">L'adresse est identique à la votre :
                            <input type="checkbox" id="adresseIdentique" name="mdpAlea">
                        </label>
                    </div> 
                    <div class="row">
                        <div class="mb-3 mt-3 col">
                            <label for="adresse">Adresse :</label>
                            <textarea class="form-control" rows="5" id="adresse" name="adresse"></textarea> 
                        </div>
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <label for="codePostal" class="form-label">Code Postal :</label>
                                <input class="form-control" id="codePostal" name="codePostal">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="ville" class="form-label">Ville :</label>
                                <Select class="form-control" id="prenom" name="ville">
                                    <option value="-1">Sélectionnez la ville</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 mt-3 col">
                            <label for="telephone" class="form-label">Téléphone :</label>
                            <input type="text" class="form-control" id="telephone" placeholder="Entrez le numéro" name="telephone">
                        </div>
                        <div class="mb-3 mt-3 col">
                            <label for="mail" class="form-label">Courriel :</label>
                            <input type="mail" class="form-control" id="mail" placeholder="adresse mail" name="mail">
                        </div>
                    </div>
                    <div class="mb-3 mt-1 col" style="float: right">
                        <input type="button" class="btn btn-primary"  value="Enregistrer" id="enregistrer"> 
                    </div>

                </fieldset>
            </form>
        </div>
    </body>
</html>
