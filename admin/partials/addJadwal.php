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
			<input type="time" name="jam_mulai" id="jam_mulai">
			<div class="alert-err">
				<p>Jam Mulai Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control">
			<p>Jam Selesai</p>
			<input type="time" name="jam_selesai" id="jam_selesai">
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
		<button type="submit" name="btn-submit" onclick="addMapel()">Submit</button>
	</div>
</form>