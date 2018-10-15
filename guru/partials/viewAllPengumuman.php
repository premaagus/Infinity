<?php 
	$id_guru = $_SESSION['user']['id_guru'];

	$queryJadwal = $koneksi->query("SELECT * FROM tb_jadwal WHERE id_guru = $id_guru");
	$dataJadwal = $queryJadwal->fetch_assoc();
	$id_mapel = $dataJadwal['id_mapel'];

	$id_guru = $dataJadwal['id_guru'];
	$queryGuru = $koneksi->query("SELECT * FROM tb_guru WHERE id_guru = $id_guru");
	$dataGuru = $queryGuru->fetch_assoc();

	$id_user = $dataGuru['id_user'];
	$queryUser = $koneksi->query("SELECT * FROM tb_user WHERE id_user = $id_user");
	$dataUser = $queryUser->fetch_assoc();

 ?>

<h1>Pengumuman</h1>
<hr>

<?php 
	$queryPengumuman = $koneksi->query("SELECT * FROM tb_pengumuman WHERE id_mapel = $id_mapel");
	while ($dataPengumuman = $queryPengumuman->fetch_assoc()) {
		$id_kelas = $dataPengumuman['id_kelas'];
		$datePengumuman = $dataPengumuman['waktu_pengumuman'];
		$queryKelas = $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");
		$dataKelas = $queryKelas->fetch_assoc();

		$waktu_pengumuman = explode(' ', $datePengumuman);
		$tanggal_pengumuman = $waktu_pengumuman[0];
		$jam_pengumuman = $waktu_pengumuman[1];
		?>
		<div class="container-pengumuman">
			<div class="pengumuman d-flex">
				<div class="img-pengumuman">
					<img src="../img/profile/<?php echo $dataUser['profile_img'] ?>">
				</div><!-- img-pengumuman -->
				<div class="text-pengumuman">
					<div class="d-flex j-btw">
						<h4><?php echo $_SESSION['user']['profile_name'] ?></h4>
						<h5><?php echo date('d F Y', strtotime($tanggal_pengumuman)); ?></h5>
					</div>
					<p><?php echo $dataPengumuman['desc_pengumuman'] ?></p>
					<div class="d-flex j-btw">
						<h6><?php echo $dataKelas['nama_kelas'] ?></h6>
						<h6><?php echo date('H:i', strtotime($jam_pengumuman)); ?></h6>
					</div>
					<div class="acc"></div>
				</div><!-- text-pengumuman -->
			</div><!-- pengumuman -->
		</div><!-- container-pengumuman -->
		<?php
	}
 ?>