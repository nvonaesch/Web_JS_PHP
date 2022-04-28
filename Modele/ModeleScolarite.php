<?php

require_once 'Modele.php';

class ModeleScolarite extends Modele
  {

  public function ObtenirListeBac()
    {
    try
      {
      $requete = $this->_bdd->query('select * from Bacs;');
      $tableauBacs = array();
      while ($ligne = $requete->fetch())
        {
          $item = array();
          $item['nom'] = $ligne["nom"];
          $item['id'] = $ligne["id_bac"];
          $item['nbSpe'] = $ligne["nb_specialites"];
        array_push($tableauBacs, $item);
        }
      $requete->closeCursor();
      header('Content-Type: application/json');
      return json_encode($tableauBacs);
      } catch (PDOException $ex)
      {
      die('<br/>Problème génération liste bac : ' . $ex->getMessage());
      }
    }
    

}
