<?php 

@include 'db_connection.php';

session_start();

if(isset($_POST['submit'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$acc_type = $_POST['acc_type'];

	$select = " SELECT * FROM registration WHERE email = '$email' && password = '$password'" ;

	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){

		$row = mysqli_fetch_array($result);

		if($row['acc_type'] == 'admin'){
			$_SESSION['admin_name'] = $row['uname'];
			header('location:../admin/admin.php');
		}elseif($row['acc_type'] == 'user'){

			$_SESSION['user_name'] = $row['uname'];
			header('location:../BE_MajorProject/afterlogin.php');

		}
	}else{
		$error[] = 'incorrect email or password!';
	}
};
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Login Now </title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="./login.css">


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
<body >

<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action=""  method = "post">
			<?php 
					if(isset($error)){
						foreach($error as $error){
							echo'<span class="error-mssg">' .$error. '</span>';
						};
					};
				?>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name = "email" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name = "password" placeholder="Password">
				</div>

                
                <a class = "pass_reset" href="#"><b>Forgot Password</b></a>
                
				<input type="submit" name = "submit" value = "Sign In" class = "button login__submit" >
				<!-- <button class="button login__submit" input type="submit" name="submit">
					<span  class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button> -->
                <a href = "./signup.php" button class="button login__submit">
					<span  class="button__text">Create Account</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button></a>		
			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="https://www.instagram.com/" class="social-login__icon fab fa-instagram"></a>
					<a href="https://www.facebook.com/" class="social-login__icon fab fa-facebook"></a>
					<a href="https://twitter.com/" class="social-login__icon fab fa-twitter"></a>
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
  
<!--validation for empty field-->

<script>
	function validation(){
		var id = document.f1.username.value;
		var pass = document.f1.password.value;

		if(id.length =="" && pass.length == ""){
			alert("User Name and Password fields are empty");  
            return false;  
		}
		else{

			if(id.length =="" ){
				alert("User Name field is empty");  
            	return false;  
			}

			if(pass.length == ""){
				alert(" Password field is empty");  
            	return false;  
			}
		}
	}
</script>

</body>
</html>
