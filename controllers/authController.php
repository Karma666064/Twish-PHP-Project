<?php
function showAuth () {
    global $base_url;
    global $isConnected;

    if (!$isConnected) {
        // Si formtype = login-post
        if ($_POST && $_POST['formType'] == 'login-post' && $_POST['username'] && $_POST['password']) {
            $connected = login($_POST['username'], $_POST['password']);
            
            if ($connected) header("Location: $base_url");
            else {
                showloginPage();
    
                echo '<p class="msg error">Mauvais identifiant !</p>';
            }
        // Si formtype = register-post
        } elseif ($_POST && $_POST['formType'] == 'register-post' && $_POST['gender'] && $_POST['username'] && $_POST['mail'] && $_POST['password']) {
            $registered = register($_POST['gender'], $_POST['username'], $_POST['mail'], false, $_POST['password']);

            if (isset($_POST['birthday'])) $registered = register($_POST['gender'], $_POST['username'], $_POST['mail'], $_POST['birthday'], $_POST['password']);
    
            if ($registered) header("location: $base_url?page=login");
            else {
                header("location: $base_url?page=register");
                echo '<p class="msg error">Une erreur est survenu lors !</p>';
            }
        } else showloginPage();

    } else {
        showloginPage();
        echo '<p class="msg warning">Vous etes déjà connecter !</p>';
    }
}

function logout () {
    global $base_url;
    session_destroy();
    header("location: $base_url");
}
?>