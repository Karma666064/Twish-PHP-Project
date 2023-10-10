<?php
session_start(); //Démarage de la session

global $base_url; $base_url = "http://localhost/twish";

global $isConnected; $isConnected = $_SESSION && $_SESSION['user'];

// Models
foreach (glob("models/*.php") as $filename) require_once $filename;

// Templates
foreach (glob("templates/*.php") as $filename) require_once $filename;

// Sprites
foreach (glob("templates/sprites/*.php") as $filename) require_once $filename;

// Controllers
foreach (glob("controllers/*.php") as $filename) require_once $filename;
?>