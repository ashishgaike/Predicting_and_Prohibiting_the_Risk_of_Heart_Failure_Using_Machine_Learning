<?php

@include 'db_connection.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $acc_type = $_POST['acc_type'];

    $select = " SELECT * FROM registration WHERE email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already registered';
    } else {
        if ($password != $cpassword) {
            $error[] = 'Password not matched';
        } else {
            $insert = "INSERT INTO registration(email, uname, password, acc_type) VALUES('$email','$uname', '$password', '$acc_type')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }

    }
}
;
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> New user ? | Please Register ! </title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="./signup.css">

</head>

<header class="header">

	<a href="#" class="logo">
	  BeSure<span class="span">.</span>
	</a>

	<nav class="navbar" data-navbar>


	  <ul class="navbar-list">

		<li class="navbar-item">
		  <a href="../BE_MajorProject/index.html" class="navbar-link" data-nav-link>Home</a>
		</li>

		<li class="navbar-item">
		  <a href="#about" class="navbar-link" data-nav-link>About Us</a>
		</li>

		<li class="navbar-item">
		  <a href="#course" class="navbar-link" data-nav-link>All Course</a>
		</li>

		<li class="navbar-item">
		  <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
		</li>

		<li class="navbar-item">
		  <a href="#" class="navbar-link" data-nav-link>Contact</a>
		</li>

	  </ul>

	</nav>
  </header>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="" method="post">

				<?php
if (isset($error)) {
    foreach ($error as $error) {
        echo '<span class="error-mssg">' . $error . '</span>';
    }
    ;
}
;
?>
				<p>already have an account? <a href="./login.php">Login Now</a></p>

                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name = "email" required placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name = "uname" required placeholder="User name">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name = "password" required placeholder="Password">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name = "cpassword" required placeholder="Confirm Password">
				</div>

				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<label for="Atype"><b>Account Type</b></label>
					<select name="acc_type" id="Atype">
						<option value="user">User</option>
						<option value="admin">Admin</option>
					</select>
				</div>




				<input type="submit" name = "submit" value = "Sign In" class = "button login__submit" >
				<!-- <i class="button__icon fas fa-chevron-right"></i> -->

			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
	</div>
</div>
<!-- partial -->

</body>
</html>
