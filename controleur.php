<?php

// __DIR__ définit la racine de notre projet
session_start();
define('ROOT', __DIR__);

// DIRECTORY_SEPARATOR : met slash ou antislash linux ou windows, sur les chemins.
define('DS', DIRECTORY_SEPARATOR);

//on crée un fichier paramètres, ex. connect.php
require_once (ROOT . DS . 'conf' . DS . '_connect.php');

$destination_default = 'welcome';

// On charge la classe Users.
include CLASSDIR.DS.'Users.php';

// Déclaration de la variale destination, mais pas == $_GET['destination'] == mais appliquer filtre sur éléments à récupérer.
// Si POST, on a INPUT_POST. Puis filtre que l'on souhaite sur cette variable --> ne renvoie que caractères normaux.
$destination = filter_input(INPUT_GET,
    'destination',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS); // voir filtres sur php doc

$action = filter_input(INPUT_GET,
    'action',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$id = filter_input(INPUT_GET,
    'id',
FILTER_SANITIZE_NUMBER_INT
    );

$destination = empty($destination)?$destination_default : $destination;

if (!file_exists(VIEWS.DS.$destination.'.php'))
{
$destination = '404';
}

// Appelle un model pour effectuer l'action
if(!empty($action)) {
    require MODEL.DS.$action.'.php';
}

// La view toujours en dernière ligne du controleur !!
require 'views' . DS . 'page.php';


