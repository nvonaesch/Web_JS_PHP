<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <legend>Encadrement :</legend>
                <div class="row">
                    <div class="mb-3 mt-3 col">
                        <label for="enseignant" class="form-label">Nom et prénom de l'enseignant référent :</label>
                        <Select class="form-control" id="enseignant" name="enseignant">
                            <option value="-1">Sélectionnez votre enseignant référent</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3 col">
                        <label for="discipline" class="form-label">Discipline :</label>
                        <Select class="form-control" id="discipline" name="discipline">
                            <option value="-1">Sélectionnez sa discipline</option>
                        </select>
                    </div>  
                </div>
                <div class="row">
                    <div class="mb-3 mt-3 col">
                        <label for="telephoneLycee" class="form-label">Numéro de téléphone :</label>
                        <input type="text" class="form-control" id="telephoneLycee" name="telephoneLycee" value="02.43.85.29.95">
                    </div>
                    <div class="mb-3 mt-3 col">
                        <label for="mailLycee" class="form-label">Courriel :</label>
                        <input type="text" class="form-control" id="mail" name="mailLycee" value="iris.touchard@gmail.com">
                    </div>  
                </div>
                <br>
                <div class="row">
                    <div class="mb-3 mt-3 col">
                        <label for="tuteur" class="form-label">Nom du tuteur dans l'entreprise :</label>
                        <input type="text" class="form-control" id="tuteur" placeholder="Entrez le nom" name="tuteur">
                    </div>
                    <div class="mb-3 mt-3 col">
                        <label for="tuteur" class="form-label">Prénom du tuteur dans l'entreprise :</label>
                        <input type="text" class="form-control" id="tuteur" placeholder="Entrez le prenom" name="tuteur">
                    </div>
                    <div class="mb-3 mt-3 col">
                        <label for="fonction" class="form-label">Fonction :</label>
                        <input type="text" class="form-control" id="fonction" placeholder="Fonction dans l'entreprise" name="fonction">
                    </div>  
                </div>
                <div class="row">
                    <div class="mb-3 mt-3 col">
                        <label for="telephone" class="form-label">Numéro de téléphone :</label>
                        <input type="text" class="form-control" id="telephone" placeholder="Format : xx.xx.xx.xx.xx" name="telephone">
                    </div>
                    <div class="mb-3 mt-3 col">
                        <label for="mail" class="form-label">Courriel :</label>
                        <input type="text" class="form-control" id="mail" placeholder="Adresse mail" name="mail">
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
