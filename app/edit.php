<?php
require 'conn.php';
session_start();

if (!isset($_GET['user_id'])) {
    header('Location: login.php');
    exit;
} else {
    $user_id = $_GET['user_id'];
}

// if (!isset($_SESSION['id'])) {

//   header('Location: login.php');
//   exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body style="background-color: #222d32;">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box" style="background-color: #113a4c;">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    EDIT PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">

                        <form action="editFunc.php" method="post" enctype="multipart/form-data" >
                           <span style="color: #549fbf;"> New Username:</span> <input type="text" name="newUsername" required><br>
                           <span style="color: #549fbf;" >New Profile Photo:</span> <input type="file" name="newPhoto" required><br>
                           <input type="text" name="id" value="<?php echo $user_id; ?>" hidden>
                            <div class="container d-flex justify-content-center align-items-center mb-3">
                                <input type="submit" class="btn btn-warning btn-sm follow mt-5" value="Edit">
                            </div>
                        </form>

                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

</body>

</html>