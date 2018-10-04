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
		$idUser 		= $dataUser['id_user'];
		$username 		= $dataUser['username'];
		$passwordDb 	= $dataUser['password'];
		$email 			= $dataUser['email'];
		$tanggalLahir 	= $dataUser['tanggal_lahir'];
		$namaLengkap 	= $dataUser['nama_lengkap'];
		$level			= $dataUser['id_level'];


		if (password_verify($password, $passwordDb)) {
			$_SESSION['user']['idUser'] 		= $idUser;
			$_SESSION['user']['username']		= $username;
			$_SESSION['user']['email'] 			= $email;
			$_SESSION['user']['tanggalLahir'] 	= $tanggalLahir;
			$_SESSION['user']['level'] 			= $level;
			$_SESSION['user']['namaLengkap'] 	= $namaLengkap;

			if ($level == 1) {
				echo "1";
			}
			else if ($level == 2) {
				echo "2";
			}
			else if ($level == 3) {
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