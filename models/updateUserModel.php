<?php
function updateUsernameUser ($idUser, $newUsername, $password) {
    global $pdo;

    if (password_verify(password_hash($password, PASSWORD_DEFAULT), $_SESSION['user']['password'])) {
        try {
            $query = $pdo->prepare("UPDATE user SET username = $newUsername WHERE id_user = $idUser");
            $query->execute();
        
            return true;
    
        } catch (PDOException $e) { return false; }

    } else return false;
}

function updateMailUser ($idUser, $newMail, $password) {
    global $pdo;

    if (password_verify(password_hash($password, PASSWORD_DEFAULT), $_SESSION['user']['password'])) {
        try {
            $query = $pdo->prepare("UPDATE user SET mail = $newMail WHERE id_user = $idUser");
            $query->execute();
        
            return true;
    
        } catch (PDOException $e) { return false; }

    } else return false;
}

function updateBirthdayUser ($idUser, $newBirthday, $password) {
    global $pdo;

    if (password_verify(password_hash($password, PASSWORD_DEFAULT), $_SESSION['user']['password'])) {
        try {
            $query = $pdo->prepare("UPDATE user SET birthday = $newBirthday WHERE id_user = $idUser");
            $query->execute();
        
            return true;
    
        } catch (PDOException $e) { return false; }

    } else return false;
}

function updateGenderUser ($idUser, $newGender, $password) {
    global $pdo;

    if (password_verify(password_hash($password, PASSWORD_DEFAULT), $_SESSION['user']['password'])) {
        try {
            $query = $pdo->prepare("UPDATE user SET gender = $newGender WHERE id_user = $idUser");
            $query->execute();
        
            return true;
    
        } catch (PDOException $e) { return false; }

    } else return false;
}
?>