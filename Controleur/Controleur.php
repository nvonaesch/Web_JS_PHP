<?php

require_once '../Modele/ModeleScolarite.php';

$nouvelleListeBac = new ModeleScolarite();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'GET')
  {
  $action = filter_input(INPUT_GET, "action");
  switch ($action)
    {
    case 'ObtenirListeBac':
      $bac = filter_input(INPUT_GET, 'bac');
      if (isset($bac))
        {
        echo $nouvelleListeBac->ObtenirListeBac();
        }
      break;
 }}