<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Lengkap</p>
			<input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Input Nama Lengkap Disini..." required>
			<div class="alert-err">
				<p>Nama Lengkap tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Nama Depan</p>
			<input type="text" name="nama_depan" id="nama_depan" placeholder="Input Nama Depan Disini..." required>
			<div class="alert-err">
				<p>Nama Depan Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Nama Belakang</p>
			<input type="text" name="nama_belakang" id="nama_belakang" placeholder="Input Nama Belakang Disini..." required>
			<div class="alert-err">
				<p>Nama Belakang Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Email</p>
			<input type="text" name="email" id="email" placeholder="Input Email Disini..." required>
			<div class="alert-err">
				<p>Email Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>NIK</p>
			<input type="number" name="nik" id="nik" placeholder="Input NIS Disini..." required>
			<div class="alert-err">
				<p>NIS tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Jenis Kelamin</p>
			<select name="jenis_kelamin" id="jenis_kelamin">
				<option value="Laki - Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>

		<div class="form-control-block">
			<p>Tempat Lahir</p>
			<input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Input Tempat Lahir Disini..." required>
			<div class="alert-err">
				<p>Tempat Lahir Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Tanggal Lahir</p>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Input E-mail Disini..." required>
			<div class="alert-err">
				<p>Tanggal Lahir Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Agama</p>
			<select name="agama" id="agama">
				<option value="Hindu">Hindu</option>
				<option value="Islam">Islam</option>
				<option value="Kristen KA">Kristen KA</option>
				<option value="Kristen P">Kristen P</option>
				<option value="Budha">Budha</option>
				<option value="Kong Hu Cu">Kong Hu Cu</option>
			</select>
		</div>

		<div class="form-control">
			<p>Telepon</p>
			<input type="number" name="telp" id="telp" placeholder="Input No Telepon Disini..." required>
			<div class="alert-err">
				<p>No Telepon Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Alamat</p>
			<input type="text" name="alamat" id="alamat" placeholder="Input Alamat Disini..." required>
			<div class="alert-err">
				<p>Alamat Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Bidang Ilmu</p>
			<input type="text" name="bidang_ilmu" id="bidang_ilmu" placeholder="Input Bidang Ilmu..." required>
			<div class="alert-err">
				<p>Jurusan Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Username</p>
			<input type="text" name="username" id="username" placeholder="Input Username Disini..." required>
			<div class="alert-err">
				<p>Username Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Password</p>
			<input type="password" name="password" id="password" placeholder="Input Password Disini..." required>
			<div class="alert-err">
				<p>Password Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control">
			<p>Ulangi Password</p>
			<input type="password" name="r_password" id="r_password" placeholder="Input Password Disini..." required>
			<div class="alert-err">
				<p>Ulangi Password Anda</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Foto Profil</p>
			<input type="file" name="profile_img" id="profile_img" required>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit">Submit</button>
	</div>
</form>
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
					$namaBaru .= ".".$extensiGambar;
					move_uploaded_file($tmp_profile, "../img/profile/$namaBaru");

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