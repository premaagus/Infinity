<h1>Ubah Password</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Foto Profil Baru</p>
			<input type="file" name="nama_lengkap" id="nama_lengkap" placeholder="Input Nama Lengkap Disini..." required>
			<div class="alert-err">
				<p>Foto Profil Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
</form>
</div>
<div class="btn-add d-flex j-end">
		<button type="submit" name="btn-submit">Submit</button>
	</div>
<script src="js/alert.js"></script>

<script>
	var input = document.querySelectorAll('input');
	for (var i = 0; i < input.length; i++){
		input[i].addEventListener('keyup', function(){
			if (this.value == "") {
				this.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			}
			else{
				this.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
			}
		});

	}
</script>

<?php 
	if (isset($_POST['btn-submit'])) {
		$username 			= $_POST['username'];
		$email 				= $_POST['email'];
		$password 			= $_POST['password'];
		$r_password 		= $_POST['r_password'];
		$nama_lengkap 		= $_POST['nama_lengkap'];
		$tanggal_lahir 		= $_POST['tanggal_lahir'];
		$profile_name 		= $_POST['nama_depan']." ".$_POST['nama_belakang'];
		$id_level 			= '3';
		$profile_img_name 	= $_FILES['profile_img']['name'];
		$tmp_profile	 	= $_FILES['profile_img']['tmp_name'];
		$nik 				= $_POST['nik'];
		$jenis_kelamin 		= $_POST['jenis_kelamin'];
		$tempat_lahir 		= $_POST['tempat_lahir'];
		$agama 				= $_POST['agama'];
		$telp 				= $_POST['telp'];
		$alamat 			= $_POST['alamat'];
		$bidang_ilmu 		= $_POST['bidang_ilmu'];
		$namaBaru			= "";


		// Validasi Email
		$queryCheckEmail = $koneksi->query("SELECT * FROM tb_user WHERE email = '$email'");
		if ($queryCheckEmail->num_rows > 0) {
			?>
				<script>
					errorAlert("Error", "Email Telah Digunakan");
				</script>
			<?php
		}
		else{
			// Validasi Username
			$queryCheckUsername = $koneksi->query("SELECT * FROM tb_user WHERE username = '$username'");
			if ($queryCheckUsername->num_rows > 0) {
				?>
				<script>
					errorAlert("Error", "Username Telah Digunakan");
				</script>
				<?php
			}
			else{
				// Validasi R-password
				if ($r_password != $password) {
					?>
					<script>
						errorAlert("Error", "Password Tidak Sama");
					</script>
					<?php
				}
				else{
					function upload(){
						//cek gambar
						$extensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
						$extensiGambar = explode('.', $profile_img_name);
						$extensiGambar = strtolower(end($extensiGambar));
						if (!in_array($extensiGambar, $extensiGambarValid)) {
							?>
							<script>
								errorAlert("Error", "Yang Anda Upload Bukan Gambar");
							</script>
							<?php
							die();
						}

						//Verified image
						$namaBaru = uniqid();
						return $namaBaru .= ".".$extensiGambar;
					}

					if ($_FILES['profile_img']['error'] == 4) {
						$namaBaru = 'profile.png';
					}
					else{
						upload();
						$namaBaru	= upload();
						move_uploaded_file($tmp_profile, "../img/profile/$namaBaru");
					}

					// add user
					$passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
					$queryAddUser = $koneksi->query("INSERT INTO tb_user VALUES (NULL, '$username', '$email', '$passwordHash', '$namaBaru', '$profile_name', $id_level)");


					if ($queryAddUser) {

						// Add Guru
						$queryCheckId = $koneksi->query("SELECT * FROM tb_user WHERE username = '$username'");
						$dataId = $queryCheckId->fetch_assoc();
						$id_user = $dataId['id_user'];

						$queryAddGuru = $koneksi->query("INSERT INTO tb_guru VALUES (NULL, $id_user, '$nama_lengkap', '$nik', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$agama', '$telp', '$alamat', '$bidang_ilmu') ");
						if ($queryAddGuru) {
							?>
							<script>
								successAlert("Sukses", "Data Berhasil Ditambahkan");
								document.addEventListener('click', function(){
									location.href = 'index.php?menu=guru';
								});
							</script>
							<?php
						}
					}
					else{
						?>
						<script>
							errorAlert("Error", "Gagal Add Data");
						</script>
						<?php
					}
				}
			}
		}
	}
 ?>