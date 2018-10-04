<h1>Tambah Data</h1>
<hr>
<div class="container-addSiswa d-flex fd-row f-row j-ctr">
	<form action="controller/add_siswaController.php" method="POST" onsubmit="return false"></form>
	<div class="form-control form-panjang">
		<h4>Nama Lengkap</h4>
		<input type="text" name="" placeholder="Nama Lengkap">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Nama Depan</h4>
		<input type="text" name="" placeholder="Nama Depan">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Nama Belakang</h4>
		<input type="text" name="" placeholder="Nama Belakang">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-panjang">
		<h4>Email</h4>
		<input type="email" name="" placeholder="Email">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-panjang">
		<h4>Username</h4>
		<input type="text" name="" placeholder="Username">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Password</h4>
		<input type="text" name="" placeholder="Password">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Ulangi Password</h4>
		<input type="text" name="" placeholder="Ulangi Password">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Tanggal Lahir</h4>
		<input type="date" name="">
		<div class="alert-err">
			<p>Nama Lengkap Tidak Boleh Kosong</p>
			<div class="point-err"></div>
		</div><!-- Alert-err -->
	</div><!-- form-control  -->
	<div class="form-control form-pendek">
		<h4>Grade</h4>
		<select>
			<option>Beginner</option>
			<option>Intermediate</option>
			<option>Expert</option>
		</select>
	</div><!-- form-control  -->
	<div class="add-new d-flex j-end i-ctr">
		<div class="btn-add">
			<button onclick="addSiswa()">Tambah</button>
		</div>
	</div>
</div><!-- container-addSiswa -->

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

	function addSiswa(){

	}
</script>