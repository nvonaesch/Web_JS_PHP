<?php
$chemin = getcwd();
$racine = 'Vue';
$image = 'Vue';
if (strpos($chemin, "Vue")) {
    $racine = '.';
    $image = '..';
}
$pagePublic = '/Public/';
if (strpos($chemin, "Public")) {
    $pagePublic = '/';
}
$pageAdmin = '/Admin/';
if (strpos($chemin, "Admin")) {
    $pagePublic = '/';
}
?>

<div class="container-fluid navbar navbar-expand-md navbar-primary bg-primary fixed-top">
    <?php
    echo '<img src=" ' . $image . '/Images/logo.png" alt="logo" style="width:40px;"/>';
    ?>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="btn btn-primary dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">Fiche accueil</a>
            <ul class="dropdown-menu">
                <?php
                echo "<li><a class='btn btn-primary dropdown-item' href='" . $racine . $pagePublic . "civilite.php'>Informations</a></li>";
                echo "<li><a class='btn btn-primary dropdown-item' href='" . $racine . $pagePublic . "scolarite.php'>Scolarité</a></li>";
                echo "<li><a class='btn btn-primary dropdown-item' href='" . $racine . $pagePublic . "responsable.php'>Responsable</a></li>";
                ?>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="btn btn-primary dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">Stage</a>
            <ul class="dropdown-menu">
                <?php
                echo "<li><a class='btn btn-primary dropdown-item' href='" . $racine . $pagePublic . "organisme.php'>Organisme d'accueil</a></li>";
                echo "<li><a class='btn btn-primary dropdown-item' href='" . $racine . $pagePublic . "encadrement.php'>Encadrement pendant le stage</a></li>";
                echo "<li><a class='btn btn-primary dropdown-item' href='" . $racine . $pagePublic . "sujet.php'>Sujet du stage</a></li>";
                ?>
            </ul>
        </li>
        <?php
        echo "<li class='nav-item'>"
        . "<a class='btn btn-primary' href='" . $racine . $pageAdmin . "creationEtudiant.php'>Création des étudiants</a>"
        . "</li>";
        ?>
    </ul>
</div>'



