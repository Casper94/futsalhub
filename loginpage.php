

<?php 
	include("includes/head.php");
?>
<?php
	include("includes/header1.php");
?>
<?php
	include("user_login.php");
?>
<?php
	//include("includes/core/init.php");
?>

<?php

	if (empty($_POST) == "false") {

		$username = $_POST["username"];
		$password = $_POST["password"];

		//echo "your username is ".$username ."and password is ".$password ;

		if (empty($username) === "true" || empty ($password)=== "true"){
			$errors[] = "You need to enter Username and password";
		} else if (user_exists($username) == "false") {
			$errors[] = "We can\'t log you in. Have you registered? ";
		} else if (user_active($username)=== "false") {
			$errors[] = " you haven\'t activated your account.";
		} else {
			$login = login($username, $password);
			if ($login == "false"){
				$errors[] = "That username /password combination is incorrect.";
			}else {

				// set the session
				$_SESSION['userId'] = $login;
				// redirect to 
				header('location: book_request.php');
				exit();


			}
		}

		print_r($errors);

	

	}
	
?>


