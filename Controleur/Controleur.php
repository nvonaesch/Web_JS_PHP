<?php

require_once 'ModeleScolarite.php';

$uneScolarite = new ModeleScolarite();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'GET') {
    $action = filter_input(INPUT_GET, "action");
    switch ($action) {
        case 'remplirListe':
            $bac = filter_input(INPUT_GET, 'bac');
            if (isset($bac)) {
                echo $listeBacs->remplirListe();
            }
            break;
 }}