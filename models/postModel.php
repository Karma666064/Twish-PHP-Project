<?php
// Post
function createPost ($idUser, $text) {
    global $pdo;

    try {
        $query = $pdo->prepare("INSERT INTO post (id_user, text) VALUES (:id_user, :text)");
        $query->execute([ 'id_user' => $idUser, 'text' => $text]);
        $data = $query->fetchAll();
    
        return true;

    } catch (PDOException $e) { echo($e); return false; }
}

function dataPosts () {
    global $pdo;
    
    try {
        $query = $pdo->prepare("SELECT post.id_post, post.id_user, post.text, post.creation_date, user.username FROM post JOIN user ON user.id_user = post.id_user");
        $query->execute();
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}

// comment
function createComment ($idUser, $idPost, $text) {
    global $pdo;

    try {
        $query = $pdo->prepare("INSERT INTO comment (id_user, id_post, text) VALUES (:id_user, :id_post, :text)");
        $query->execute(['id_user' => $idUser, 'id_post' => $idPost, 'text' => $text]);
    
        return true;

    } catch (PDOException $e) { echo($e); return false; }
}

function dataCommentByPost ($idPost) {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT comment.id_comment, comment.id_user, comment.id_post, comment.text, comment.creation_date, user.username FROM comment JOIN user ON comment.id_user = user.id_user WHERE id_post = $idPost");
        $query->execute();    
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}

// Like
function addLike ($idUser, $idPost) {
    global $pdo;

    try {
        if (count(dataLike($idUser, $idPost)) < 1) {
            $query = $pdo->prepare("INSERT INTO likes (id_user, id_post, liked) VALUES (:id_user, :id_post, :liked)");
            $query->execute(['id_user' => $idUser, 'id_post' => $idPost, 'liked' => true]);
        
            return true;
    
        } else {
            $query = $pdo->prepare("UPDATE likes SET liked = :liked WHERE id_user = :id_user AND id_post = :id_post");
            $query->execute(['liked' => true, 'id_user' => $idUser, 'id_post' => $idPost]);
        
            return true;
        }
    } catch (PDOException $e) { echo($e); return false; }
}

function removeLike ($idUser, $idPost) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE likes SET liked = :liked WHERE id_user = :id_user AND id_post = :id_post");
        $query->execute(['liked' => false, 'id_user' => $idUser, 'id_post' => $idPost]);
    
        return true;

    } catch (PDOException $e) { echo($e); return false; }
}

function dataLike ($idUser, $idPost) {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT * FROM likes WHERE id_user = :id_user AND id_post = :id_post");
        $query->execute(['id_user' => $idUser, 'id_post' => $idPost]);
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}
?>