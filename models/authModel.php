<?php

function login ($username, $password) {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT * FROM user WHERE username = :username");
        $query->execute(['username' => $username]);
    
        $user = $query->fetch();
    
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user; //Seesion user
            return true;

        } else return false;

    } catch (PDOException $e) { return false; }
}

function register ($gender, $username, $mail, $birthday, $password) {
    global $pdo;
    
    if ($birthday) {
        $arr['birthday'] = $birthday;
        $text = "INSERT INTO user (gender, username, mail, birthday, password) VALUES (:gender, :username, :mail, :birthday, :password)";
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

    } catch (PDOException $e) { return false; }
}

?>