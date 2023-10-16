<?php
function users () {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT * FROM user");
        $query->execute();
    
        return $query->fetchAll();

    } catch (PDOException $e) { echo($e); return false; }
}

function updateUsernameUser ($idUser, $newUsername) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE user SET username = :username WHERE id_user = :id_user");
        $query->execute(['username' => $newUsername, 'id_user' => $idUser]);
    
        $_SESSION['user']['username'] = $newUsername;

        return true;

    } catch (PDOException $e) { echo($e); return false; }
}

function updateMailUser ($idUser, $newMail) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE user SET mail = :mail WHERE id_user = :id_user");
        $query->execute(['mail' => $newMail, 'id_user' => $idUser]);
    
        $_SESSION['user']['mail'] = $newMail;
    
        return true;

    } catch (PDOException $e) { echo($e); return false; }
}

function updateBirthdayUser ($idUser, $newBirthday) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE user SET birthday = :birthday WHERE id_user = :id_user");
        $query->execute(['birthday' => $newBirthday, 'id_user' => $idUser]);
    
        $_SESSION['user']['birthday'] = $newBirthday;
    
        return true;

    } catch (PDOException $e) { echo($e); return false; }
}

function updateGenderUser ($idUser, $newGender) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE user SET gender = :gender WHERE id_user = :id_user");
        $query->execute(['gender' => $newGender, 'id_user' => $idUser]);
    
        $_SESSION['user']['gender'] = $newGender;

        return true;

    } catch (PDOException $e) { echo($e); return false; }
}
?>