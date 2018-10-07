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
			<p>Tanggal Lahir</p>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Input E-mail Disini..." required>
			<div class="alert-err">
				<p>Tanggal Lahir Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>Foto Profil</p>
			<input type="file" name="profile_img" id="profile_img" required>
		</div>
		<div class="form-control-block">
			<p>Kelas</p>
			<select name="id_kelas">
				<?php 
					$queryKelas = $koneksi->query("SELECT * FROM tb_kelas");
					while ($dataKelas = $queryKelas->fetch_assoc()) {
						?>
						<option value="<?php echo $dataKelas['id_kelas'] ?>"><?php echo $dataKelas['nama_kelas'] ?></option>
						<?php
					}
				 ?>
			</select>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit">Submit</button>
	</div>
</form>
<script src="js/alert.js"></script>

<script>
	var input = document.querySelectorAll('input');
	var namaLengkap = document.getElementById('nama_lengkap');
	var namaDepan = document.getElementById('nama_depan');
	var namaBelakang = document.getElementById('nama_belakang');
	var email = document.getElementById('email');
	var	username = document.getElementById('username');
	var password = document.getElementById('password');
	var rPassword = document.getElementById('r_password');
	var tanggalLahir = document.getElementById('tanggal_lahir');
	var profileImg = document.getElementById('profile_img');
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
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$r_password = $_POST['r_password'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$profile_name = $_POST['nama_depan']." ".$_POST['nama_belakang'];
		$id_level = '2';
		$id_kelas = $_POST['id_kelas'];
		$profile_img_name = $_FILES['profile_img']['name'];
		$tmp_profile = $_FILES['profile_img']['tmp_name'];

		$queryCheckEmail = $koneksi->query("SELECT * FROM tb_user WHERE email = '$email'");

		if ($queryCheckEmail->num_rows > 0) {
			?>
				<script>
					errorAlert("Error", "Email Telah Digunakan");
				</script>
			<?php
		}
		else{
			$queryCheckUsername = $koneksi->query("SELECT * FROM tb_user WHERE username = '$username'");
			if ($queryCheckUsername->num_rows > 0) {
				?>
				<script>
					errorAlert("Error", "Username Telah Digunakan");
				</script>
				<?php
			}
			else{
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

					$passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
					$queryAddUser = $koneksi->query("INSERT INTO tb_user VALUES (NULL, '$username', '$email', '$passwordHash', '$nama_lengkap', '$tanggal_lahir', '$namaBaru', '$profile_name', 2)");


					if ($queryAddUser) {

						$queryCheckId = $koneksi->query("SELECT * FROM tb_user WHERE username = '$username'");
						$dataId = $queryCheckId->fetch_assoc();
						$id_user = $dataId['id_user'];

						$queryAddSiswa = $koneksi->query("INSERT INTO tb_siswa VALUES (NULL, $id_user, $id_kelas) ");
						if ($queryAddSiswa) {
							?>
							<script>
								successAlert("Sukses", "Data Berhasil Ditambahkan");
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