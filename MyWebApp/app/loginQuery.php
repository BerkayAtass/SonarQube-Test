<?php

session_start();
require_once 'conn.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT id, password FROM users WHERE username = :username");
    $query->bindParam(':username', $username);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);


    if ($user && password_verify($password, $user['password'])) {
        // $_SESSION['id'] = $user['id']; 
        // header('location: profile.php'); 
        header('location: profile.php?user_id='.$user['id']); 
    } else {
        $_SESSION['error'] = "Invalid username or password"; 
        header('location: login.php'); 
    }


    // if ($user && password_verify($password, $user['password'])) {
    //     $_SESSION['id'] = $user['id']; 
    //     header('location: profile.php'); 
    // } else {
    //     $_SESSION['error'] = "Invalid username or password"; 
    //     header('location: login.php'); 
    // }

} else {
    header('location: login.php'); 
}
?>