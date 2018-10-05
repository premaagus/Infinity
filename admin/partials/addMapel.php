<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Mata Pelajaran</p>
			<input type="text" name="nama_mapel" id="nama_mapel" placeholder="Input Nama Mata Pelajaran Disini..." required>
			<div class="alert-err">
				<p>Nama Mata Pelajaran Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>Nama Guru</p>
			<select name="id_guru" id="id_guru">
			<?php 
				$queryGuru = $koneksi->query("SELECT * FROM tb_guru AS a INNER JOIN tb_user AS b on a.id_user = b.id_user");
				while ($dataGuru = $queryGuru->fetch_assoc()) {
					?>
					<option value="$dataGuru['id_guru"><?= $dataGuru['profile_name'] ?></option>
					<?php
				}
			 ?>
			 </select>
			<div class="alert-err">
				<p>Nama Guru Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>Background</p>
			<select name="id_guru" id="id_guru">
				<option value="merah">Merah</option>
			 </select>
			<div class="alert-err">
				<p>Nama Guru Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
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

	document.addEventListener('DOMContentLoaded', function(){
		
	});
</script>