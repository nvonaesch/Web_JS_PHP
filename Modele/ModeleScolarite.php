<?php

class ModeleVille extends Modele {
    
    public function ObtenirBacs($codePostal) {
        try {
            $requete = $this->_bdd->prepare("select nom from Bacs order by id_bac;");
          
            echo $requete;
            
            while ($ligne = $requete->fetch()) {
                $nom = $ligne['nom'];
                $id = $ligne['id_bac'];
                echo '<option value = ' . $id . ' name= > \'' . $nom . '</option>';    
            }
            header('Content-Type: application/json');
            
        } catch (PDOException $exc) {
            die("<br/> Pb Obtenirvilles :" . $exc->getMessage());
        }
    }
    
}

