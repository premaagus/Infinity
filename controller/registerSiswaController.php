<?php 
	require_once '../lib/config.php';

	$username		= $koneksi->real_escape_string($_POST['username']);
	$email			= $koneksi->real_escape_string($_POST['email']);
	$namaLengkap	= $koneksi->real_escape_string($_POST['namaLengkap']);
	$password		= $koneksi->real_escape_string($_POST['password']);
	$rPassword		= $koneksi->real_escape_string($_POST['rPassword']);
	$tanggalLahir	= $koneksi->real_escape_string($_POST['tanggalLahir']);
	$gradePoint		= $koneksi->real_escape_string($_POST['gradePoint']);
	$idLevel		= $koneksi->real_escape_string($_POST['idLevel']);
	
	$queryEmail = $koneksi->query("SELECT * FROM tb_user WHERE email = '$email'");
	if ($queryEmail->num_rows > 0) {
		echo "Email";
	}
	else{
		$queryUsername = $koneksi->query("SELECT * FROM tb_user WHERE username = '$username'");
		if ($queryUsername->num_rows > 0) {
			echo "Username";
		}
		else{
			if ($password != $rPassword) {
				echo "Password";
			}
			else{
				$passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

				$queryAddUser = $koneksi->query("INSERT INTO tb_user VALUES(NULL, '$username', '$email', '$passwordHash', '$namaLengkap', '$tanggalLahir', $idLevel) ");

				if ($queryAddUser) {
					$querySelectId = $koneksi->query("SELECT * FROM tb_user WHERE username = '$username'");
					$dataUser = $querySelectId->fetch_assoc();
					$idUser = $dataUser['idUser'];

					$queryAddSiswa = $koneksi->query("INSERT INTO tb_siswa VALUES (NULL, $idUser, $gradePoint) ");
					if ($queryAddSiswa) {
						echo "Sukses";
					}
					else{
						echo "Error";
					}
				}
				else{
					echo "Gagal";
				}
			}
		}
	}

	
 ?>