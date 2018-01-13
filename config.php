<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE", "http://localhost/SistemaProtocoloEletronico/");
    define("BASEADMIN", "http://localhost/SistemaProtocoloEletronico/App/admin/");
    $config['dbname'] = 'dbname';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'password';
} else {
    define("BASE", "https://seudominio_real/");
    define("BASEADMIN", "https://seudominio_real/admin/");
    $config['dbname'] = 'dbname';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'user';
    $config['dbpass'] = 'password';
}

