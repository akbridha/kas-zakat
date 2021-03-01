<?php

if( !session_id() )session_start();
    require_once '../app/init.php';

echo "[index awal route] file selalu jalan";
echo "</br>";
$app = new App;
