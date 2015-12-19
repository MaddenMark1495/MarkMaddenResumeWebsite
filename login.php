<?php
	
	if(!session_start()) {
		
		header("Location: error.php");
		exit;
	}
	
	
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		header("Location: page1.php");
		exit;
	}
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	
		if ($username == "test" && $password == "pass") {
			
			$_SESSION['loggedin'] = $username;
			header("Location: page1.php");
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
			require "log-in.php";
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "log-in.php";
	}
	
?>