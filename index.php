<?php
//Charger le fichier qui charge tous les autres
require_once('autoload.php');

//Affiche toutes les pages en fonction du get page, par défaut sa renvoie sur la page d'accueil
if (isset($_GET['page'])) { //http://localhost/twish?page=login
    switch ($_GET['page']) {
        case 'login':
            showAuth('login');
            break;
        case 'register':
            showAuth('register');
            break;
        case 'logout':
            logout();
            break;
        case 'home':
            showHome();
            break;
        case 'profile':
            showProfile();
            break;
        case 'friend':
            showFriend();
            break;
        default:
            showHome();
            break;
    }
} else showHome();

?>