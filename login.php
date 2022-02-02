
<?php 
  include('connection.php');
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: index.php");
    
  }
  if (isset($_POST['username'])) {
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $conn->query("SELECT * FROM users WHERE email = '$username'");
    if ($result->num_rows > 0) {
      $r = mysqli_fetch_assoc($result);
      $hpw = $r['password'];
      $id = $r['id'];
      if (password_verify($password, $hpw)) {
          $_SESSION['username'] = $username;
          $conn->query("INSERT INTO user_logs SET users_id = $id, is_login = 1, created_at = NOW()");
          header('Location: index.php');
      } else {
        echo "<script>alert('Invalid Credentials!')</script>";
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
	<div class="container my-5 ">

		<div class="row d-flex justify-content-center">
			<div class="col-md-6 bg-light log-logo">
					<div class="row bg-dark">
										<!-- <div class="col-md-6  log-logo" style=" color: whitesmoke;padding-left: 5; text-align: left;"> -->
										<div class="col-md-6  log-logo" style=" color: whitesmoke;padding-left: 5;">
											<img src="img/LOGO.png " class="brand-logo" style="padding-right: 0;">
											<span style="  text-align: right">Login</span>
										</div>
										
									</div>
				<div class="card px-5 py-5 h-70" id="form1">
					<form action="" method="post">
						<div class="form-data">
					
							<div class="forms-input mb-4">
								<input autocomplete="off" class="w-100 mt-5" type="text" name="username" required placeholder="Enter username">
							</div>
							<div class="forms-input mb-4">
								<input autocomplete="off" class="w-100" type="password" name="password" required placeholder="Enter password">
							</div>

								<button type="submit" class="btn btn-dark w-100 mb-3">Login</button>
							</div>

							<a href="signup.php" class="">
							Create an account?
							</a>
							<h5 class="mt-5"></h5>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>

	<?php
		include_once 'footer.php';
	?>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</body>
</html>