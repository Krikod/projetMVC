<?php

$userForm = array('nom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                    'prenom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                    'email' => FILTER_SANITIZE_EMAIL,
                    'password' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                    'verifpwd' => FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$user = filter_input_array(INPUT_POST, $userForm);

//Sécurisation du mot de passe
$user['mdp'] = password_hash($user['password'], PASSWORD_BCRYPT);

unset($user['password']);
unset($user['verifpwd']);

$objUser = new Users();
$idUser = $objUser->createUser($user);


