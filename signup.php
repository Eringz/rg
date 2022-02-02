<?php 
  include('connection.php');
  if (isset($_POST['username'])) {
    
    global $conn;
    $user = $_POST['username'];
    $pw = password_hash($_POST['password'], PASSWORD_BCRYPT);
    if($_POST['password'] != $_POST['retype-password']){
      echo "<script>alert('Password Not Match!')</script>";
    } else {
      $result = $conn->query("INSERT INTO users SET email = '$user', password = '$pw'");
      if ($result) {
        echo "<script>alert('Success!')</script>";
        header('Location: login.php');
      } else {
        echo "<script>alert('Fail!')</script>";
      }
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include_once 'head.php'
    ?>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5 h-100" id="form1">
                    <form action="" method="post">
                        <div class="form-data">
                            <h4 class="mb-5">Create Account</h4>
                            <div class="forms-input mb-4">
                                <input autocomplete="off" class="w-100" type="text" name="username" required placeholder="Enter username">
                            </div>
                            <div class="forms-input mb-4">
                                <input autocomplete="off" class="w-100" type="password" name="password" required placeholder="Enter password">
                            </div>
                            <div class="forms-input mb-4">
                                <input autocomplete="off" class="w-100" type="password" name="retype-password" required placeholder="Re-type password">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark w-100">Create Account</button>
                            </div>
                            <h5 class="mt-5">Already have an account? <span><a href="login.php"> Login Here!</a></span> </h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once 'footer.php';
    ?>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>