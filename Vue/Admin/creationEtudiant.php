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
        <script src="../../libs/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>Administration</title>
    </head>
    <body>
        <?php
        require_once '../Commun/menu.php';
        ?>
        <div class="container-fluid contenu">
            <h1>Création des étudiants</h1>
            <form id="creation">
                <fieldset>
                    <legend>Généralités :</legend>
                    <div class="row">
                        <div class="mb-1 mt-3 col">
                            <label for="promotion" class="form-label">Promotion :
                                <input type="text" class="form-control" id="promotion" placeholder="Exemple SNIR2022" name="promotion">
                            </label>
                        </div>
                        <div class="mb-1 mt-3 col" >
                            <label for="valDefaut" id="valeurParDefaut" class="form-label">Mot de passe par défaut :
                                <input type="text" class="form-control" id="valDefaut" name="valDefaut" value="toto">
                            </label>
                        </div>
                        <div class="mb-1 mt-3 col">
                            <label for="mdpAlea" class="form-label">Mot de passe aléatoire :
                                <input type="checkbox" id="mdpAlea" name="mdpAlea">
                            </label>
                        </div> 
                    </div>
                    <div class="mt-1 col" style="float: right">
                        <input type="button" class="btn btn-primary"  value="Importer" id="importer"> 
                        <input type="button" class="btn btn-primary"  value="Visualiser liste étudiants" id="creer"> 
                    </div>
                </fieldset>
            </form>
            <br>
            <!-- Liste des étudiants -->
            <div id="etudiant">
                <fieldset>
                    <div class="row">
                        <legend class="col">Liste des étudiants :</legend>
                        <div class="col"></div>
                        <div class="col"></div>
                        <button type="button" class="btn btn-primary col ml-1" style="float: right" value="" id="ajouter" data-bs-toggle="modal" data-bs-target="#creationEtudiant" id="creer">
                            Ajouter un étudiant
                        </button>                  
                    </div>
                    <table id="liste-etudiants" class="table table-borderless table-responsive card-1 p-4">
                        <tr class="border-bottom">
                            <th><span class="ml-2">Nom</span></th>
                            <th><span class="ml-2">Prenom</span></th>
                            <th><span class="ml-2">Login</span></th>
                            <th><span class="ml-2">Mot de passe</span></th>
                        </tr>     
                    </table>
                </fieldset>
            </div>
            <!-- Boite modale -->
            <div class="modal fade" id="creationEtudiant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Création d'un étudiant</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <label for="nom" class="form-label">Nom :
                                    <input id="nom" name="nom" type="texte" class="form-control" placeholder="Nom de l'étudiant">
                                </label>
                                <label for="prenom" class="form-label">Prenom :
                                    <input id="prenom" name="prenom" type="texte" class="form-control" placeholder="Prénom de l'étudiant">
                                </label>
                                <label for="login" class="form-label">Login :
                                    <input id="login" name="login" type="texte" class="form-control" placeholder="En minuscule sans espace">
                                </label>
                                <label for="mdp" class="form-label">Mot de passe :
                                    <input id="mdp" name="mdp" type="texte" class="form-control">
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary" id="enregistrer">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
