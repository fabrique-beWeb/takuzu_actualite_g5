
<?php
// On definit le type de contenu qu'on va renvoyer et l'encodage
header('Content-Type: application/json; charset=utf-8');

// Petite fonction qui nous permet d'afficher une erreur
function showError($msg) {
     echo json_encode(array('error' => $msg));
     exit;
}

// Si aucune action demandée
if (empty($_GET['action'])) {
     showError("Aucune action demandée");
}

// Nos inclusions
require_once ("/core.php");
