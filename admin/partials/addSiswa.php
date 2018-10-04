<h1>Tambah Data</h1>
<hr>
<form action="" method="POST">
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
			<input type="text" name="nama_depan" id="nama_depan" placeholder="Input Username Disini..." required>
			<div class="alert-err">
				<p>Nama Depan Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control">
			<p>Nama Belakang</p>
			<input type="text" name="nama_belakang" id="nama_belakang" placeholder="Input Password Disini..." required>
			<div class="alert-err">
				<p>Nama Belakang Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Email</p>
			<input type="text" name="email" id="email" placeholder="Input Nama Lengkap Disini..." required>
			<div class="alert-err">
				<p>Email Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Username</p>
			<input type="text" name="username" id="username" placeholder="Input Nama Lengkap Disini..." required>
			<div class="alert-err">
				<p>Username Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Password</p>
			<input type="password" name="password" id="password" placeholder="Input No Telepon Disini..." required>
			<div class="alert-err">
				<p>Password Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control">
			<p>Ulangi Password</p>
			<input type="text" name="r_password" id="r_password" placeholder="Input Alamat Disini..." required>
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
			<input type="file" name="profile_img" id="profile_img" placeholder="Input E-mail Disini...">
		</div>
		<div class="form-control-block">
			<p>Kelas</p>
			<select name="id_kelas">
				<option value="Admin">Admin</option>
				<option value="Kasir">Kasir</option>
			</select>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit">Submit</button>
	</div>
</form>

<?php 
	if (isset($_POST['btn-submit'])) {
		echo "Clicked";
	}
 ?>

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