<?php

session_start();
require_once 'conn.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //We can do sql injection here. To fix this, follow the step in login.php and use the other form.
    $query = $conn->prepare("SELECT id, password FROM users WHERE username = '$username' AND password = '$password'");
    // $query = $conn->prepare("SELECT id, password FROM users WHERE username = :username");
    // $query->bindParam(':username', $username);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);


    // Below is a misdirection where the idor vulnerability is revealed. To close this vulnerability, you should remove the comment blocks and place the header underneath the comment block. 
    // In addition, you need to take the user_id section in the isset at the top of the profile and edit pages and the pages connected to them to the comment blog and remove those with session  
    // id instead from the comments.
    if ($user) {
        // $_SESSION['id'] = $user['id']; 
        // header('location: profile.php'); 
        header('location: profile.php?user_id='.$user['id']); 
    } else {
        $_SESSION['error'] = "Invalid username or password"; 
        header('location: login.php'); 
    }

} else {
    header('location: login.php'); 
}
?>