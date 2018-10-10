<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" onsubmit="return false">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Mata Pelajaran</p>
			<select name="id_mapel" id="id_mapel">
				<?php 
					$queryMapel = $koneksi->query("SELECT * FROM tb_mapel");
					while ($dataMapel = $queryMapel->fetch_assoc()) {
						?>
						<option value="<?php echo $dataMapel['id_mapel'] ?>"><?php echo $dataMapel['nama_mapel']; ?></option>
						<?php
					}
				 ?>
			</select>
		</div>
		<div class="form-control-block">
			<p>Nama Guru</p>
			<select name="id_guru" id="id_guru">
				<?php 
					$queryGuru = $koneksi->query("SELECT * FROM tb_guru AS a INNER JOIN tb_user AS b ON a.id_user = b.id_user");
					while ($dataGuru = $queryGuru->fetch_assoc()) {
						?>
						<option value="<?php echo $dataGuru['id_guru'] ?>"><?php echo $dataGuru['profile_name'] ?></option>
						<?php
					}
				 ?>
			</select>
		</div>

		<div class="form-control-block">
			<p>Hari</p>
			<select name="hari" id="hari">
				<option value="senin">Senin</option>
				<option value="selasa">Selasa</option>
				<option value="rabu">Rabu</option>
				<option value="kamis">Kamis</option>
				<option value="jumat">Jumat</option>
				<option value="sabtu">Sabtu</option>
			</select>
		</div>

		<div class="form-control">
			<p>Jam mulai</p>
			<input type="time" name="jam_mulai" id="jam_mulai" required>
			<div class="alert-err">
				<p>Jam Mulai Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Jam Selesai</p>
			<input type="time" name="jam_selesai" id="jam_selesai" required>
			<div class="alert-err">
				<p>Jam Selesai Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Kelas</p>
			<select name="id_kelas" id="id_kelas">
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

		<div class="form-control-block">
			<p>Tahun Ajaran</p>
			<input type="number" name="tahun_ajaran" id="tahun_ajaran" placeholder="Input Tahun Ajaran disini...">
			<div class="alert-err">
				<p>Tahun Ajaran tidak boleh kosong</p>
				<div class="point-err"></div>
			</div>
		</div>


	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit" onclick="addJadwal()">Submit</button>
	</div>
</form>

<script src="js/alert.js"></script>
<script>
	var id_mapel 		= document.getElementById('id_mapel');
	var id_guru 		= document.getElementById('id_guru');
	var hari 			= document.getElementById('hari');
	var jam_mulai 		= document.getElementById('jam_mulai');
	var	jam_selesai 	= document.getElementById('jam_selesai');
	var id_kelas 		= document.getElementById('id_kelas');
	var tahun_ajaran 	= document.getElementById('tahun_ajaran');
	var input 			= document.querySelectorAll('input');


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


	function addJadwal(){
		if (jam_mulai.value == "") {
			jam_mulai.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
		}
		else{
			jam_mulai.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
			if (jam_selesai.value == "") {
				jam_selesai.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			}
			else{
				jam_selesai.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
				if (tahun_ajaran.value == "") {
					tahun_ajaran.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
				}
				else{
					tahun_ajaran.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
					var xhr 	= new XMLHttpRequest();
					var data 	= "id_mapel="+id_mapel.value+"&id_guru="+id_guru.value+"&hari="+hari.value+"&jam_mulai="+jam_mulai.value+"&jam_selesai="+jam_selesai.value+"&id_kelas="+id_kelas.value+"&tahun_ajaran="+tahun_ajaran.value;

					xhr.onreadystatechange = function(){
						if (xhr.readyState == 4 && xhr.status == 200) {
							console.log(xhr.responseText);
							if (xhr.responseText == 'success') {
								successAlert("Berhasil", "Jadwal telah ditambahkan");
								document.addEventListener('click', function(){
									location.href = 'index.php?menu=jadwal';
								});
							}
							else if (xhr.responseText == 'jam') {
								errorAlert("Error", "Data jam tidak valid");
								document.addEventListener('click', function(){
									jam_mulai.focus();
								});
							}
							else{
								errorAlert("Gagal", "Jadwal gagal ditambahkan");
							}
						}
					}
					xhr.open("POST", "controller/addJadwal_controller.php", true);
					xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
					xhr.send(data);
				}
			}
		}
	}
</script>