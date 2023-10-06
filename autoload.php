<?php
session_start(); //Démarage de la session

global $base_url; $base_url = "http://localhost/music_market";

$GLOBALS['isConnected'] = $_SESSION && $_SESSION['user'];

require_once('models/db.php');
require_once('models/authModel.php');
require_once('models/homeModel.php');
require_once('models/finderModel.php');

require_once('templates/loginPage.php');
require_once('templates/albumPage.php');
require_once('templates/homePage.php');
require_once('templates/card_album.php');

require_once('controllers/authController.php');
require_once('controllers/albumController.php');
require_once('controllers/homeController.php');
?>