<?php
// Carica l'ambiente interno e le classi di RSS-Bridge
require __DIR__ . '/../lib/bootstrap.php';

// Ora la classe Configuration esiste e possiamo forzare i parametri per Vercel
Configuration::set('cache', 'type', 'file');
Configuration::set('cache', 'path', '/tmp/cache/');

// Avvia l'applicazione principale
$app = new RssBridge();
$app->main();
