<?php 
	$id_siswa = $_SESSION['user']['id_siswa'];
	$querySiswa = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = $id_siswa");
	$dataSiswa = $querySiswa->fetch_assoc();

	$id_kelas = $dataSiswa['id_kelas']
 ?>

<h1>Pengumuman</h1>
<hr>

<?php 
	$queryPengumuman = $koneksi->query("SELECT * FROM tb_pengumuman WHERE id_kelas = $id_kelas");
	while ($dataPengumuman = $queryPengumuman->fetch_assoc()) {
		$id_mapel = $dataPengumuman['id_mapel'];

		$queryMapel = $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
		$queryJadwal = $koneksi->query("SELECT * FROm tb_jadwal WHERE id_mapel = $id_mapel AND id_kelas = $id_kelas");

		$dataMapel = $queryMapel->fetch_assoc();
		$dataJadwal = $queryJadwal->fetch_assoc();

		$id_guru 	= $dataJadwal['id_guru'];
		$queryGuru 	= $koneksi->query("SELECT * FROM tb_guru WHERE id_guru = $id_guru");
		$dataGuru 	= $queryGuru->fetch_assoc();
		$id_user 	= $dataGuru['id_user'];
		$queryUser 	= $koneksi->query("SELECT * FROM tb_user WHERE id_user = $id_user");
		$data_user 	= $queryUser->fetch_assoc();

		$waktu_pengumuman = $dataPengumuman['waktu_pengumuman'];
		$waktu_pengumuman = explode(' ', $waktu_pengumuman);
		$tanggal_pengumuman = date('d F Y', strtotime($waktu_pengumuman[0]));
		$jam_pengumuman = date('H:i', strtotime($waktu_pengumuman[1]));
		?>
		<div class="container-pengumuman">
			<div class="pengumuman d-flex">
				<div class="img-pengumuman">
					<img src="../img/profile/<?php echo $data_user['profile_img'] ?>">
				</div><!-- img-pengumuman -->
				<div class="text-pengumuman">
					<div class="d-flex j-btw">
						<h4><?php echo $data_user['profile_name'] ?></h4>
						<h5><?php echo $tanggal_pengumuman ?></h5>
					</div>
					<p><?php echo $dataPengumuman['desc_pengumuman'] ?></p>
					<div class="d-flex j-btw">
						<h6><?php echo $dataMapel['nama_mapel'] ?></h6>
						<h6><?php echo $jam_pengumuman ?></h6>
					</div>
					<div class="acc"></div>
				</div><!-- text-pengumuman -->
			</div><!-- pengumuman -->
		</div><!-- container-pengumuman -->
		<?php
	}
 ?>