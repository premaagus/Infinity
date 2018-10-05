<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" onsubmit="return false">
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
					<option value="<?= $dataGuru['id_guru'] ?>" view="<?= $dataGuru['profile_name'] ?>"><?= $dataGuru['profile_name'] ?></option>
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
			<select name="background_mapel" id="background_mapel">
				<option value="merah.png">Merah</option>
			 </select>
			<div class="alert-err">
				<p>Gambar Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit" onclick="addMapel()">Submit</button>
	</div>
</form>

<h1>Preview</h1>
<hr>
<div class="card-pelajaran">
	<img src="images/kelas/merah.png">
	<h3>Matematika</h3>
</div><!-- card-pelajaran -->

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

	function addMapel(){
		var nama_mapel = document.getElementById('nama_mapel');
		var id_guru = document.getElementById('id_guru');
		var background_mapel = document.getElementById('background_mapel');
		var data = "nama_mapel="+nama_mapel.value+"&id_guru="+id_guru.value+"&background_mapel="+background_mapel.value;

		if (nama_mapel.value == "") {
			nama_mapel.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			nama_mapel.focus();
		}
		else{
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if (xhr.readyState == 4 && xhr.status == 200) {
					console.log(xhr.responseText);
					if (xhr.responseText == 'success') {
						successAlert('Sukses', 'Berhasil Menambahkan Mapel');
						document.addEventListener('click', function(){
							location.href = 'index.php?menu=mapel';
						});
					}
					else{
						errorAlert('Error', 'Gagal Menambahkan Mapel');
					}
				}
			}
			xhr.open('POST', 'controller/addMapel_controller.php', true);
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.send(data);
		}
	}
</script>