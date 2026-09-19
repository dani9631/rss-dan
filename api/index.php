<?php
// Definisce in modo assoluto la cartella dei dati nell'unica directory scrivibile di Vercel
define('PATH_DATA', '/tmp/');

// Se la cartella temporanea della cache non esiste, la crea
if (!is_dir('/tmp/cache')) {
    mkdir('/tmp/cache', 0777, true);
}

// Copia dinamicamente i file di configurazione da GitHub a /tmp se non sono già presenti
$rootPath = __DIR__ . '/../';
if (file_exists($rootPath . 'config.ini.php') && !file_exists('/tmp/config.ini.php')) {
    copy($rootPath . 'config.ini.php', '/tmp/config.ini.php');
}
if (file_exists($rootPath . 'whitelist.txt') && !file_exists('/tmp/whitelist.txt')) {
    copy($rootPath . 'whitelist.txt', '/tmp/whitelist.txt');
}

// Carica il core di RSS-Bridge
require $rootPath . 'index.php';
