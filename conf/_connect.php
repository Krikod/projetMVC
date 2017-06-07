<?php

define('BDD_DRIVER', 'mysql');
define('BDD_SERVEUR', 'localhost');
define('BDD_USER', 'root');
define('BDD_MDP', 'root');
define('BDD', 'MVC');

// time zone
date_default_timezone_set('UTC');
setlocale(LC_TIME, 'fr_FR.UTF8');

//défintions des chemins aboslus
define('MODEL',ROOT.DS.'model');
define('VIEWS', ROOT.DS.'views');
define('CLASSDIR', ROOT.DS.'class');
define('LOGS_DIR', ROOT.DS.'logs');
