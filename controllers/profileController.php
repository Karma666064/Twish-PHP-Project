<?php 

function showProfile () {
    global $isConnected;

    if ($isConnected) {
        if ($_POST && $_POST['confirmPassword']) {
            // var_dump($_SESSION);
            $verifPassword = password_verify($_POST['confirmPassword'], $_SESSION['user']['password']);

            if ($verifPassword && $_POST['username']) updateUsernameUser($_SESSION['user']['id_user'], $_POST['username']);
            if ($verifPassword && $_POST['mail']) updateMailUser($_SESSION['user']['id_user'], $_POST['mail']);
            if ($verifPassword && $_POST['birthday']) updateBirthdayUser($_SESSION['user']['id_user'], $_POST['birthday']);
            if ($verifPassword && $_POST['gender'] && $_POST['gender'] != 'Default') updateGenderUser($_SESSION['user']['id_user'], $_POST['gender']);

            showProfilePage();
        } else showProfilePage();

    } else showHomePage();
}
?>