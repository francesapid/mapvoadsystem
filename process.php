<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)) {
            header('LOCATION: login.php?login=Fill out the required fields!');
        }
        else {
            $sql = 'SELECT * FROM admin WHERE username = :username AND password = :password';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['username' => $username, 'password' => $password]);
            $user = $stmt->fetch();
            

            if($user->type == 'admin') {
                $_SESSION['user'] = $username;
                $_SESSION['pass'] = $password;
                $_SESSION['admin'] = 'admin';
                header('LOCATION: dashboard.php');
            }
            else {
                header('LOCATION: login.php?login=Username or Password is incorrect!');
            }
        }
    }
    else {
        header('LOCATION: login.php?login=Fill in the required fields!');
    }