<?php
require 'conn.php';
session_start();

if (isset($_POST['id']) && isset($_POST['newUsername']) && isset($_FILES['newPhoto']['name'])) {

    $id = $_POST['id'];
    $newUsername = $_POST['newUsername'];
    $newPhotoName = $_FILES['newPhoto']['name'];

    //You can open and use the comment lines below to fix the limited file upload vulnerability. SAMPLE LOAD <?php echo system("whoami"); THEN PHP TAG SHOULD BE CLOSED!!

    // Check file extension
    // $allowedExtensions = array("jpeg", "jpg", "png");
    // $fileExtension = strtolower(pathinfo($newPhotoName, PATHINFO_EXTENSION));
    // if (!in_array($fileExtension, $allowedExtensions)) {
    //     echo "You can only upload .jpeg, .jpg and .png files.";
    //     exit();
    // }

    // Check MIME type
    // $allowedMimeTypes = array("image/jpeg", "image/jpg", "image/png");
    // if (!in_array($newPhotoType, $allowedMimeTypes)) {
    //     echo "You can only upload files in .jpeg, .jpg and .png format.";
    //     exit();
    // }

    // Upload new profile photo
    $targetDir = "img/";
    $targetFilePath = $targetDir . basename($newPhotoName);
    move_uploaded_file($_FILES["newPhoto"]["tmp_name"], $targetFilePath);

    $query = $conn->prepare("UPDATE users SET username = ?, photo = ? WHERE id = ?");
    $query->execute(array($newUsername, $newPhotoName, $id));


    header("Location: profile.php");
} else {
    echo "POST verileri eksik.";
    print_r($_POST);
}
