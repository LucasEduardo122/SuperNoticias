<?php
session_start();
ob_start();

define('URL', 'http://localhost/supernoticias/');
define('URLADM', 'http://localhost/supernoticias/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'supernoticias');
