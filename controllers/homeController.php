<?php
function showPosts () {
    if (dataPosts() && count(dataPosts()) > 0) {
        foreach (dataPosts() as $post) echo showPostSprite($post);

    } else echo '<p>Aucun post pour le moment</p>';
}

// Affiche la page home
function showHome () {
    global $isConnected;

    if ($isConnected) {
        if ($_POST && $_POST['formType'] == 'createPost' && $_POST['textarea']) {
            $createdPost = createPost($_SESSION['user']['id_user'], $_POST['textarea']);

            if (!$createdPost) echo '<p class="msg error">Une erreur est survenu lors de la création du post !</p>';
        }
    }

    showHomePage();
}