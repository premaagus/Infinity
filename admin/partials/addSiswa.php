<h1>Tambah Data</h1>
<hr>
<div class="container-addSiswa d-flex fd-row f-row j-ctr">
	<form action="controller/add_siswaController.php" method="POST" onsubmit="return false"></form>
	<div class="form-control form-panjang">
		<h4>Nama Lengkap</h4>
		<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" id="nama_lengkap">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Nama Depan</h4>
		<input type="text" name="nama_depan" placeholder="Nama Depan" id="nama_depan">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Nama Belakang</h4>
		<input type="text" name="nama_belakang" placeholder="Nama Belakang" id="nama_belakang">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-panjang">
		<h4>Email</h4>
		<input type="email" name="email" placeholder="Email" id="email">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-panjang">
		<h4>Username</h4>
		<input type="text" name="username" id="username" placeholder="Username">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Password</h4>
		<input type="text" name="password" id="password" placeholder="Password">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Ulangi Password</h4>
		<input type="text" name="r_password" id="r_password" placeholder="Ulangi Password">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Tanggal Lahir</h4>
		<input type="date" name="tanggal_lahir" id="tanggal_lahir">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Foto</h4>
		<input type="file" name="tanggal_lahir" id="tanggal_lahir">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="add-new d-flex j-end i-ctr">
		<div class="btn-add">
			<button onclick="addSiswa()">Tambah</button>
		</div>
	</div>
</div><!-- container-addSiswa -->

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

	function addSiswa(){

	}
</script>