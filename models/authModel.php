<?php

function login ($username, $password): bool {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT * FROM user WHERE username = :username");
        $query->execute(['username' => $username]);
    
        $user = $query->fetch();
    
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user; //Seesion user
            return true;

        } else return false;

    } catch (PDOException $e) { echo($e); return false; }
}

function register ($gender, $username, $mail, $birthday, $password): bool {
    global $pdo;
    
    if ($birthday) {
        $text = "INSERT INTO user (gender, username, mail, birthday, password) VALUES (:gender, :username, :mail, :birthday, :password)";
        $arr = [
            'gender' => $gender,
            'username' => $username,
            'mail' => $mail,
            'birthday' => $birthday,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
    } else {
        $text = "INSERT INTO user (gender, username, mail, password) VALUES (:gender, :username, :mail, :password)";
        $arr = [
            'gender' => $gender,
            'username' => $username,
            'mail' => $mail,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
    }

    try {
        $query = $pdo->prepare($text);
        $query->execute($arr);
    
        return true;

    } catch (PDOException $e) { echo($e); return false; }
}

?>