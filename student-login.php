<?php
session_start();
require_once("./functions/function.php");

# check for session variables
if(isSession())
	header("location: ./student/dashboard.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div>

		<header class="row shadow">

			<div class="col-md-1 pt-1 bg-light">
				<a href="./index.php">
					<img class="ml-5" src="./images/left.png" width="50" height="50" alt="">
				</a>

			</div>

			<div class="col-md-11 bg-light p-2 ">
				<h2 class="ml-5">Student Login</h2>
			</div>
		</header>

		<section class="row">

			<div class="col-md-12 text-center mt-5">
				<img src="./images/student.png" alt="">
			</div>

			<div class="col-md-12">

				<form action="" class="w-50 mx-auto" method="post">

					<div class="form-group">
						<label for="">Registration No</label>
						<input placeholder="Registration is 001" type="text" class="form-control" name="sreg" required="required" />
					</div>


					<div class="form-group">
						<label for="">Password</label>
						<input placeholder="Password is admin" type="password" class="form-control" name="spass" required="required" />
					</div>

					<input class="btn btn-success" type="submit" name="slog" value="Login">


				</form>

			</div>

		</section>
	</div>


</body>
</html>

<?php

	if(isset($_POST['slog'])){
		processStudentLoginForm();
	}

 ?>
