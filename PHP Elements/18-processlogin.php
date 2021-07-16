<!-- <pre> <?php # print_r($_POST); ?> </pre> -->

<?php 

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'Tanushka' && $password == 'pass'){
		echo "Login Successfull";
	}
	else {
		echo "Invalid Username or Password";
	}

 ?>