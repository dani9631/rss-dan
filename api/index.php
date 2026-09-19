<?php
// Configura forzatamente la cache in memoria/cartella temporanea per Vercel
Configuration::set('cache', 'type', 'file');
Configuration::set('cache', 'path', '/tmp/cache/');

// Configura la whitelist per evitare l'uso incontrollato delle risorse
Configuration::set('system', 'enabled_bridges', ['whitelist']);

// Carica il core di RSS-Bridge
require __DIR__ . '/../index.php';
