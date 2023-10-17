<?php
function friendUsers () {
    global $pdo;

    try {
        $query = $pdo->prepare(
            "SELECT user.* FROM user WHERE user.id_user != :id_user
            AND (user.id_user not in (SELECT friend.id_user_friend from friend WHERE friend.id_user = :id_user)
                AND user.id_user not in (SELECT friend.id_user from friend WHERE friend.id_user_friend = :id_user)) 
            OR user.id_user in (SELECT friend.id_user from friend WHERE friend.requested = 'remove')"
        );
        $query->execute(['id_user' => $_SESSION['user']['id_user']]);
    
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}

function friendResquestAdd ($idFriend) {
    global $pdo;

    try {
        $query = $pdo->prepare("INSERT INTO friend (id_user, id_user_friend, requested) VALUES (:id_user, :id_user_friend, :requested)");
        $query->execute(['id_user' => $_SESSION['user']['id_user'], 'id_user_friend' => $idFriend, 'requested' => 'send']);
    
        return true;
    } catch (PDOException $e) { echo($e); return false; }
}

function friendResquestAccept ($idUser) {
    global $pdo;

    try {
        
        $query = $pdo->prepare("UPDATE friend SET requested = :requested WHERE id_user = :id_user AND id_user_friend = :id_user_friend");
        $query->execute(['requested' => 'friend', 'id_user' => $idUser, 'id_user_friend' => $_SESSION['user']['id_user']]);
    
        return true;
    } catch (PDOException $e) { echo($e); return false; }
}

function friendRemove ($idUser) {
    global $pdo;

    try {
        $query = $pdo->prepare(
            "DELETE FROM friend WHERE
                (id_user = :id_user AND id_user_friend = :id_user_friend)
            OR
                (id_user = :id_user2 AND id_user_friend = :id_user_friend2)"
        );
        $query->execute(['id_user' => $idUser, 'id_user_friend' => $_SESSION['user']['id_user'],'id_user2' => $_SESSION['user']['id_user'], 'id_user_friend2' => $idUser]);
    
        return true;
    } catch (PDOException $e) { echo($e); return false; }
}

function friendDataById ($idUser, $idFriend) {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT * FROM friend WHERE id_user = :id_user AND id_user_friend = :id_user_friend");
        $query->execute(['id_user' => $idUser, 'id_user_friend' => $idFriend]);
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}

function friendDataByUser ($idUser) {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT * FROM friend JOIN user ON friend.id_user_friend = user.id_user WHERE friend.id_user = :id_user");
        $query->execute(['id_user' => $idUser]);
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}

function friendsDataResquest () {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT user.* FROM friend JOIN user ON friend.id_user = user.id_user WHERE id_user_friend = :id_user_friend AND requested = :requested");
        $query->execute(['id_user_friend' => $_SESSION['user']['id_user'], 'requested' => 'send']);
    
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}

function friendsData () {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT u1.id_user as id_user1, u1.username as username1, u2.id_user as id_user2, u2.username as username2 FROM friend JOIN user as u1 ON friend.id_user = u1.id_user JOIN user as u2 ON friend.id_user_friend = u2.id_user WHERE ((friend.id_user = :id_user  OR  friend.id_user_friend = :id_user)) AND requested = :requested");
        $query->execute(['id_user' => $_SESSION['user']['id_user'], 'requested' => 'friend']);
    
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}
?>