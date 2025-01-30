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
  <link rel="stylesheet" href="css/profileStyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body style="background-color: #222d32;">
  <div class="container d-flex justify-content-center align-items-center mt-5">

    <?php
    $userId = $_GET['user_id'];
    $websec = $conn->prepare("SELECT * FROM users WHERE id = $userId");
    $websec->execute();
    $user = $websec->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php
    // $userId = $_SESSION['id'];
    // $websec = $conn->prepare("SELECT * FROM users WHERE id = $userId");
    // $websec->execute();
    // $user = $websec->fetchAll(PDO::FETCH_ASSOC);
    ?>


    <div class="card">

      <div class="upper">

        <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">

      </div>

      <div class="user text-center">

        <div class="profile mt-3">

          <img src="img/<?php echo $user[0]['photo'];?>" class="rounded-circle" width="80">

        </div>

      </div>
      <div class="mt-5 text-center">

        <h4 class="mb-0"><?php echo $user[0]['username'];?></h4>
        <div class="mt-3 mb-4">
          <a href="edit.php?user_id=<?php echo $user[0]['id'];?>" class="btn btn-warning btn-sm follow">Edit</a>
          <a href="logout.php" class="btn btn-danger btn-sm follow">Logout</a>
        </div>

      </div>

    </div>

  </div>

  </div>
</body>

</html>