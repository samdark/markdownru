<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|css|ico|txt)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}

require dirname(__DIR__) . '/public/index.php';
