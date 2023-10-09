<?php 

function showProfile () {
    global $isConnected;

    if ($isConnected) {
        if ($_POST && $_POST['confirmPassword']) {
            $verifPassword = password_verify(password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT), $_SESSION['user']['password']);

            if ($verifPassword && $_POST['username']) updateUsernameUser($_SESSION['user']['id_user'], $_POST['username']);
            elseif ($verifPassword && $_POST['mail']) updateMailUser($_SESSION['user']['id_user'], $_POST['mail']);
            elseif ($verifPassword && $_POST['birthday']) updateBirthdayUser($_SESSION['user']['id_user'], $_POST['birthday']);
            elseif ($verifPassword && $_POST['gender']) updateGenderUser($_SESSION['user']['id_user'], $_POST['gender']);
            else echo(password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT)); echo($_SESSION['user']['password']);

            showProfilePage();
        } else showProfilePage();

    } else showHomePage();
}
?>