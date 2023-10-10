<?php
session_start(); //Démarage de la session

global $base_url; $base_url = "http://localhost/twish";

global $isConnected; $isConnected = $_SESSION && $_SESSION['user'];

// Models
require_once('models/databaseModel.php');
require_once('models/authModel.php');
require_once('models/userModel.php');
// require_once('models/friendModel.php');
require_once('models/postModel.php');

// Templates
require_once('templates/loginPage.php');
require_once('templates/friendPage.php');
require_once('templates/profilePage.php');
require_once('templates/homePage.php');

// Sprites
require_once('templates/sprites/postSprite.php');
require_once('templates/sprites/friendSprite.php');
require_once('templates/sprites/navSprite.php');

// Controllers
require_once('controllers/authController.php');
require_once('controllers/friendController.php');
require_once('controllers/homeController.php');
require_once('controllers/profileController.php');
?>