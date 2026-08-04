<?php

session_start();


if (isset($_GET['lang'])) {

    $_SESSION['lang'] = $_GET['lang'];
}


$lang = $_SESSION['lang'] ?? 'en';


if ($lang == "id") {

    $text = require "lang/id.php";
} else {

    $text = require "lang/en.php";
}
