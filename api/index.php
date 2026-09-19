<?php
// Definisce in modo assoluto la cartella dei dati nell'unica directory scrivibile di Vercel
define('PATH_DATA', '/tmp/');

// Carica il core di RSS-Bridge
require __DIR__ . '/../index.php';
