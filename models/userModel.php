<?php
function updateUsernameUser ($idUser, $newUsername) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE user SET username = :username WHERE id_user = :id_user");
        $query->execute(['username' => $newUsername, 'id_user' => $idUser]);
    
        return true;

    } catch (PDOException $e) { return false; }
}

function updateMailUser ($idUser, $newMail) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE user SET mail = :mail WHERE id_user = :id_user");
        $query->execute(['mail' => $newMail, 'id_user' => $idUser]);
    
        return true;

    } catch (PDOException $e) { return false; }
}

function updateBirthdayUser ($idUser, $newBirthday) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE user SET birthday = :birthday WHERE id_user = :id_user");
        $query->execute(['birthday' => $newBirthday, 'id_user' => $idUser]);
    
        return true;

    } catch (PDOException $e) { return false; }
}

function updateGenderUser ($idUser, $newGender) {
    global $pdo;

    try {
        $query = $pdo->prepare("UPDATE user SET gender = :gender WHERE id_user = :id_user");
        $query->execute(['gender' => $newGender, 'id_user' => $idUser]);
    
        return true;

    } catch (PDOException $e) { return false; }
}
?>