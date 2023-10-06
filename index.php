<?php
//Charger le fichier qui charge tous les autres
require_once('autoload.php');

//Affiche toutes les pages en fonction du get page, par défaut sa renvoie sur la page d'accueil
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'login':
            // auth();
            showLoginPage();
            break;
        case 'register':
            // auth();
            showloginPage();
            break;
        case 'home':
            // logout();
            showHomePage();
            break;
        case 'profile':
            // showAlbum();
            showProfilePage();
            break;
        case 'friend':
            // showFriend();
            showFriendPage();
            break;
        default:
            // showHome();
            showHomePage();
            break;
    }
} else showHomePage();

?>