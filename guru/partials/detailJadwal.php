<?php 
	$id_jadwal 		= $_GET['id_jadwal'];
	$queryJadwal 	= $koneksi->query("SELECT * FROM tb_jadwal WHERE id_jadwal = $id_jadwal");
	$dataJadwal 	= $queryJadwal->fetch_assoc();

	//key
	$id_mapel 		= $dataJadwal['id_mapel'];
	$id_kelas		= $dataJadwal['id_kelas'];

	//query
	$queryMapel		= $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
	$queryKelas 	= $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");

	//data
	$dataMapel		= $queryMapel->fetch_assoc();
	$dataKelas		= $queryKelas->fetch_assoc();
 ?>

<h1><?php echo $dataMapel['nama_mapel'] ?></h1>
<a href="#">
	<h2><?php echo $dataKelas['nama_kelas'] ?></h2>
</a>
<hr>
<div class="container-detailMapel d-flex fd-row f-row j-ctr">
	<div class="card-detailMapel">
		<a href="index.php?menu=jadwal&id_mapel=<?php echo $dataMapel['id_mapel'] ?>&id_kelas=<?php echo $dataKelas['id_kelas'] ?>&view=materi">
			<img src="../img/pattern/pattern1.png">
			<h3>Materi</h3>
		</a>
	</div><!-- card-detailMapel -->
	<div class="card-detailMapel">
		<a href="index.php?menu=mapel&id=<?php echo $_GET['id'] ?>&view=tugas">
			<img src="../img/pattern/pattern2.png">
			<h3>Tugas</h3>
		</a>
	</div><!-- card-detailMapel -->
	<div class="card-detailMapel pengumuman">
		<a href="#">
			<img src="../img/pattern/pattern3.png">
			<h3>Pengumuman</h3>
		</a>
	</div><!-- card-detailMapel -->
</div><!-- container-detailMapel -->