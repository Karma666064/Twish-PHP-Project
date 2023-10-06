<?php
//Charger le fichier qui charge tous les autres
require_once('autoload.php');

//Affiche toutes les pages en fonction du get page, par défaut sa renvoie sur la page d'accueil
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'login':
            // auth();
            break;
        case 'register':
            // auth();
            break;
        case 'logout':
            // logout();
            break;
        case 'album':
            // showAlbum();
            break;
        default:
            // showHome();
            break;
    }
} 
// else showHome();
?>