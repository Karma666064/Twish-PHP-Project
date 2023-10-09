<?php 

function showProfile () {
    global $isConnected;

    if ($isConnected) {
        if ($_POST && $_POST['confirmPassword']) {
            
        } else showProfilePage();

    } else showHomePage();
}
?>