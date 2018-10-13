<?php 
	$id_kelas = $_GET['id_kelas'];

	$queryKelas = $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");
	$dataKelas 	= $queryKelas->fetch_assoc();
 ?>

<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" onsubmit="return false">
	<input type="hidden" id="id_kelas" name="id_kelas" value="<?php echo $id_kelas ?>">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Kelas</p>
			<input type="text" name="nama_kelas" id="nama_kelas" placeholder="Input Nama Kelas Disini..." required value="<?php echo $dataKelas['nama_kelas'] ?>">
			<div class="alert-err">
				<p>Nama Kelas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div><!-- alert-err -->
		</div><!-- form-cotrol-block -->
		
		<div class="form-control-block">
			<p>Ruangan</p>
			<input type="number" name="ruangan" id="ruangan" placeholder="Input ruangan Disini..." required value="<?php echo $dataKelas['ruangan'] ?>">
			<div class="alert-err">
				<p>Nama Kelas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div><!-- alert-err -->
		</div><!-- form-cotrol-block -->
		<div class="form-control-block">
			<p>Ruangan</p>
			<select name="background_kelas" id="background_kelas">
				<option value="pattern-blue.png" <?php if($dataKelas['background_kelas'] == 'pattern-blue.png'){echo 'selected';} ?>>Biru</option>
				<option value="pattern-green.png" <?php if($dataKelas['background_kelas'] == 'pattern-green.png'){echo 'selected';} ?>>Hijau</option>
				<option value="pattern-orange.png" <?php if($dataKelas['background_kelas'] == 'pattern-orange.png'){echo 'selected';} ?>>Orange</option>
				<option value="pattern-pink.png" <?php if($dataKelas['background_kelas'] == 'pattern-pink.png'){echo 'selected';} ?>>Pink</option>
				<option value="pattern-purple.png" <?php if($dataKelas['background_kelas'] == 'pattern-purple.png'){echo 'selected';} ?>>Ungu</option>
				<option value="pattern-yellow.png" <?php if($dataKelas['background_kelas'] == 'pattern-yellow.png'){echo 'selected';} ?>>Kuning</option>
			</select>
		</div><!-- form-cotrol-block -->
		
	</div><!-- container1 -->
	<div class="btn-add">
		<button type="submit" name="btn-submit" onclick="addKelas()">Submit</button>
	</div>
</form>

<script src="js/alert.js"></script>

<script>
	var input 		= document.querySelectorAll('input');
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

	function addKelas(){

		var id_kelas 	= document.getElementById('id_kelas');
		var nama_kelas 	= document.getElementById('nama_kelas');
		var ruangan 	= document.getElementById('ruangan');
		var background_kelas = document.getElementById('background_kelas');
		var data 		= "nama_kelas="+nama_kelas.value+"&ruangan="+ruangan.value+"&id_kelas="+id_kelas.value+"&background_kelas="+background_kelas.value;
		if (nama_kelas.value == "") {
			nama_kelas.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
		}
		else{
			nama_kelas.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
			if (ruangan.value == "") {
				ruangan.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			}
			else{
				ruangan.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if (xhr.readyState == 4 && xhr.status == 200) {
						if (xhr.responseText == 'sukses') {
							successAlert("Sukses", "Berhasil Mengubah Kelas");
							document.addEventListener('click', function(){
								location.href = 'index.php?menu=kelas';
							});
						}
						else{
							errorAlert("Gagal", "Gagal Mengubah Kelas");
						}
					}
				}
				xhr.open("POST", "controller/editKelas_controller.php", true);
				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhr.send(data);
			}
		}
	}
</script>