<?php 
	require_once '../lib/config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!isset($username) || !isset($password)) {
		header('location: ../index.php');
	}

	$queryCheck = $koneksi->query("SELECT * FROM tb_user WHERE username = '$username' OR email = '$username'");

	if ($queryCheck->num_rows > 0) {
		$dataUser 		= $queryCheck->fetch_assoc();
		$id_user 		= $dataUser['id_user'];
		$username 		= $dataUser['username'];
		$passwordDb 	= $dataUser['password'];
		$email 			= $dataUser['email'];
		$profile_name	= $dataUser['profile_name'];
		$profile_img	= $dataUser['profile_img'];
		$level			= $dataUser['id_level'];

		$_SESSION['user']['id_user'] 		= $id_user;
		$_SESSION['user']['email'] 			= $email;
		$_SESSION['user']['profile_name'] 	= $profile_name;
		$_SESSION['user']['profile_img'] 	= $profile_img;
		$_SESSION['user']['level'] 			= $level;


		if (password_verify($password, $passwordDb)) {
			if ($level == 1) {
				echo "1";
			}
			else if ($level == 2) {
				echo "2";
			}
			else if ($level == 3) {
				$_SESSION['user']['id_user'] 		= $id_user;
				$_SESSION['user']['email'] 			= $email;
				$_SESSION['user']['profile_name'] 	= $profile_name;
				$_SESSION['user']['profile_img'] 	= $profile_img;
				$_SESSION['user']['id_level'] 		= $id_level;
				echo "3";
			}
		}

		else{
			echo "gagal";
		}
	}
	else{
		echo "gagal";
	}
 ?>