<!DOCTYPE HTML>

	<head>
		<title> Logout Screen </title>
	</head>

	<body>
		<?php 
		unset($_SESSION['username']);
		session_destroy();

		if(!isset($_SESSION['username'])) {
			echo 'Successfully logged out!';
		} else {
			echo 'There was an issue.';
		}
		header("location: index.html");
		exit;
		?>



	</body>