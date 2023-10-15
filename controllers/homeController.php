<?php
function showPosts () {
    if (dataPosts() && count(dataPosts()) > 0) {
        foreach (dataPosts() as $post) echo showPostSprite($post);

    } else echo '<p>Aucun post pour le moment</p>';
}

// Affiche la page home
function showHome () {
    global $isConnected;

    // créer un post
    if ($_POST && isset($_POST['formType']) && isset($_POST['textarea']) && $_POST['formType'] == 'createPost') {
        if ($isConnected) {
            $createdPost = createPost($_SESSION['user']['id_user'], $_POST['textarea']);

            if (!$createdPost) echo '<p class="msg error">Une erreur est survenu lors de la création du post !</p>';
        } else echo '<p class="error">Vous devez etre connecter pour créer un post</p>';

    // créer un commentaire
    } elseif ($_POST && isset($_POST['formType']) && isset($_POST['textareaComment']) && isset($_POST['idPost']) && $_POST['formType'] == 'createComment') {
        if ($isConnected) {
            $createdComment = createComment($_SESSION['user']['id_user'], $_POST['idPost'], $_POST['textareaComment']);

            if (!$createdComment) echo '<p class="msg error">Une erreur est survenu lors de la création du commentaire !</p>';
        } else echo '<p class="error">Vous devez etre connecter pour créer un commentaire</p>';

    } elseif (isset($_GET['action'])) {
        if ($_POST && $_POST['idPost']) {
            if ($_GET['action'] == 'liked') {
                createLike($_SESSION['user']['id_user'], $_POST['idPost']);
            } elseif ($_GET['action'] == 'disliked') {
                deleteLike($_SESSION['user']['id_user'], $_POST['idPost']);
            }
        }
    }

    showHomePage();
}