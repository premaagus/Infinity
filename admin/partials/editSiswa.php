<?php 
	$id_user = $_GET['id_user'];
	$queryUser = $koneksi->query("SELECT * FROM tb_user AS a INNER JOIN tb_siswa AS b ON a.id_user = b.id_user WHERE a.id_user = $id_user");
	$dataUser =  $queryUser->fetch_assoc();
	$profile_name = explode(" ", $dataUser['profile_name']);
 ?>

<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Lengkap</p>
			<input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Input Nama Lengkap Disini..." required value="<?php echo $dataUser['nama_lengkap'] ?>">
			<div class="alert-err">
				<p>Nama Lengkap tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Nama Depan</p>
			<input type="text" name="nama_depan" id="nama_depan" placeholder="Input Nama Depan Disini..." required value="<?php echo $profile_name[0] ?>">
			<div class="alert-err">
				<p>Nama Depan Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Nama Belakang</p>
			<input type="text" name="nama_belakang" id="nama_belakang" placeholder="Input Nama Belakang Disini..." required value="<?php echo $profile_name[1] ?>">
			<div class="alert-err">
				<p>Nama Belakang Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Email</p>
			<input type="text" name="email" id="email" placeholder="Input Email Disini..." required value="<?php echo $dataUser['email'] ?>">
			<div class="alert-err">
				<p>Email Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>NIS</p>
			<input type="number" name="nis" id="nis" placeholder="Input NIS Disini..." required value="<?php echo $dataUser['nis'] ?>">
			<div class="alert-err">
				<p>NIS tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Jenis Kelamin</p>
			<select name="jenis_kelamin" id="jenis_kelamin">
				<option value="Laki - Laki" <?php if($dataUser['jenis_kelamin'] == 'Laki - Laki'){echo 'selected';} ?>>Laki - Laki</option>
				<option value="Perempuan" <?php if($dataUser['jenis_kelamin'] == 'Perempuan'){echo 'selected';} ?>>Perempuan</option>
			</select>
		</div>

		<div class="form-control-block">
			<p>Tempat Lahir</p>
			<input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Input Tempat Lahir Disini..." required value="<?php echo $dataUser['tempat_lahir'] ?>">
			<div class="alert-err">
				<p>Tempat Lahir Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Tanggal Lahir</p>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Input E-mail Disini..." required value="<?php echo $dataUser['tanggal_lahir'] ?>">
			<div class="alert-err">
				<p>Tanggal Lahir Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Agama</p>
			<select name="agama" id="agama">
				<option value="Hindu" <?php if($dataUser['agama'] == 'Hindu'){echo 'selected';} ?>>Hindu</option>
				<option value="Islam" <?php if($dataUser['agama'] == 'Islam'){echo 'selected';} ?>>Islam</option>
				<option value="Kristen KA" <?php if($dataUser['agama'] == 'Kristen KA'){echo 'selected';} ?>>Kristen KA</option>
				<option value="Kristen P" <?php if($dataUser['agama'] == 'Kristen P'){echo 'selected';} ?>>Kristen P</option>
				<option value="Budha" <?php if($dataUser['agama'] == 'Budha'){echo 'selected';} ?>>Budha</option>
				<option value="Kong Hu Cu" <?php if($dataUser['agama'] == 'Kong Hu Cu'){echo 'selected';} ?>>Kong Hu Cu</option>
			</select>
		</div>

		<div class="form-control">
			<p>Telepon</p>
			<input type="number" name="telp" id="telp" placeholder="Input No Telepon Disini..." required value="<?php echo $dataUser['telp'] ?>">
			<div class="alert-err">
				<p>No Telepon Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Alamat</p>
			<input type="text" name="alamat" id="alamat" placeholder="Input Alamat Disini..." required value="<?php echo $dataUser['alamat'] ?>">
			<div class="alert-err">
				<p>Alamat Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Jurusan</p>
			<input type="text" name="jurusan" id="jurusan" placeholder="Input Jurusan..." required value="<?php echo $dataUser['jurusan'] ?>">
			<div class="alert-err">
				<p>Jurusan Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Username</p>
			<input type="text" name="username" id="username" placeholder="Input Username Disini..." required value="<?php echo $dataUser['username'] ?>">
			<div class="alert-err">
				<p>Username Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Foto Profil</p>
			<img src="../img/profile/<?php echo $dataUser['profile_img'] ?>">
			<input type="file" name="profile_img" id="profile_img">
		</div>
		<div class="form-control-block">
			<p>Kelas</p>
			<select name="id_kelas">
				<?php 
					$queryKelas = $koneksi->query("SELECT * FROM tb_kelas");
					while ($dataKelas = $queryKelas->fetch_assoc()) {
						?>
						<option value="<?php echo $dataKelas['id_kelas'] ?>" <?php if($dataUser['id_kelas'] == $dataKelas['id_kelas']){echo "selected";} ?>><?php echo $dataKelas['nama_kelas'] ?></option>
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
		$email 				= $_POST['email'];
		$nama_lengkap 		= $_POST['nama_lengkap'];
		$tanggal_lahir 		= $_POST['tanggal_lahir'];
		$profile_name 		= $_POST['nama_depan']." ".$_POST['nama_belakang'];
		$id_level 			= '2';
		$id_kelas 			= $_POST['id_kelas'];
		$profile_img_name 	= $_FILES['profile_img']['name'];
		$tmp_profile 		= $_FILES['profile_img']['tmp_name'];
		$nis 				= $_POST['nis'];
		$jenis_kelamin 		= $_POST['jenis_kelamin'];
		$tempat_lahir 		= $_POST['tempat_lahir'];
		$agama 				= $_POST['agama'];
		$telp 				= $_POST['telp'];
		$alamat 			= $_POST['alamat'];
		$jurusan 			= $_POST['jurusan'];

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
			$namaBaru .= ".".$extensiGambar;
			move_uploaded_file($tmp_profile, "../img/profile/$namaBaru");
		}

		if ($_FILES['profile_img']['error'] == 4) {
			$namaBaru = $dataUser['profile_img'];
		}
		else{
			upload();
		}

		$queryUpdateUser = $koneksi->query("UPDATE tb_user SET email='$email', profile_img='$namaBaru', profile_name='$profile_name' WHERE id_user = $id_user");

		if ($queryUpdateUser) {
			$queryUpdateSiswa = $koneksi->query("UPDATE tb_siswa SET nama_lengkap = '$nama_lengkap', nis = '$nis', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', agama='$agama', telp='$telp', alamat='$alamat', jurusan='$jurusan', id_kelas=$id_kelas WHERE id_user = $id_user ");
			if ($queryUpdateSiswa) {
				?>
					<script>
						successAlert("Berhasil", "Data telah diubah");
						document.addEventListener('click', function(){
							location.href = 'index.php?menu=siswa';
						});
					</script>
				<?php
			}
			else{
				?>
					<script>
						errorAlert("Gagal", "Data Gagal diubah");
					</script>
				<?php
			}
		}
		else{
			?>
				<script>
					errorAlert("Gagal", "Data Gagal diubah");
				</script>
			<?php
		}

		
	}
 ?>