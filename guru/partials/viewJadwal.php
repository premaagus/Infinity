<?php 
	$id_user 	= $_SESSION['user']['id_user'];
	$queryGuru 	= $koneksi->query("SELECT * FROM tb_guru WHERE id_user = $id_user");
	$dataGuru 	= $queryGuru->fetch_assoc();
	$id_guru 	= $dataGuru['id_guru'];
 ?>

<h1>Senin</h1>
<hr>

<div class="container-pelajaran d-flex fd-row f-row j-str i-ard">

	<?php 
		$queryJadwal = $koneksi->query("SELECT * FROM tb_jadwal WHERE id_guru = $id_guru AND hari = 'senin'");
		while ($dataJadwal = $queryJadwal->fetch_assoc()) {
			$jam_mulai		= $dataJadwal['jam_mulai'];
			$jam_selesai	= $dataJadwal['jam_selesai'];
			$id_mapel 		= $dataJadwal['id_mapel'];
			$id_kelas		= $dataJadwal['id_kelas'];

			$queryMapel = $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
			$queryKelas = $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");

			$dataMapel 	= $queryMapel->fetch_assoc();
			$dataKelas	= $queryKelas->fetch_assoc();

			?>
			<div class="card-pelajaran">
				<a href="index.php?menu=mapel&id=<?php echo $dataMapel['id_mapel'] ?>">
					<img src="images/kelas/<?php echo $dataMapel['background_mapel'] ?>">
					<h3><?php echo $dataMapel['nama_mapel'] ?></h3>
					<h4><?php echo $dataKelas['nama_kelas'] ?></h4>
					<p><?php echo date('H:i', strtotime($jam_mulai))." - ".date('H:i', strtotime($jam_selesai)) ?></p>
				</a>
				<div class="preference">
					<i class="fas fa-ellipsis-v"></i>

					<div class="container-preference">
						<ul>
							<li><a href="index.php?menu=mapel&action=edit&id=<?php echo $dataMapel['id_mapel'] ?>">Edit</a></li>
							<li><a href="index.php?menu=mapel&action=delete&id=<?php echo $dataMapel['id_mapel'] ?>">Delete</a></li>
						</ul>
					</div>
				</div>
			</div><!-- card-pelajaran -->
			<?php
		}
	 ?>

	

</div><!-- container-pelajaran -->

<h1>Rabu</h1>
<hr>

<div class="container-pelajaran d-flex fd-row f-row j-str i-ard">

	<?php 
		$queryJadwal = $koneksi->query("SELECT * FROM tb_jadwal WHERE id_guru = $id_guru AND hari = 'rabu'");
		while ($dataJadwal = $queryJadwal->fetch_assoc()) {
			$jam_mulai		= $dataJadwal['jam_mulai'];
			$jam_selesai	= $dataJadwal['jam_selesai'];
			$id_mapel 		= $dataJadwal['id_mapel'];
			$id_kelas		= $dataJadwal['id_kelas'];

			$queryMapel = $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
			$queryKelas = $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");

			$dataMapel 	= $queryMapel->fetch_assoc();
			$dataKelas	= $queryKelas->fetch_assoc();

			?>
			<div class="card-pelajaran">
				<a href="index.php?menu=mapel&id=<?php echo $dataMapel['id_mapel'] ?>">
					<img src="images/kelas/<?php echo $dataMapel['background_mapel'] ?>">
					<h3><?php echo $dataMapel['nama_mapel'] ?></h3>
					<h4><?php echo $dataKelas['nama_kelas'] ?></h4>
					<p><?php echo date('H:i', strtotime($jam_mulai))." - ".date('H:i', strtotime($jam_selesai)) ?></p>
				</a>
				<div class="preference">
					<i class="fas fa-ellipsis-v"></i>

					<div class="container-preference">
						<ul>
							<li><a href="index.php?menu=mapel&action=edit&id=<?php echo $dataMapel['id_mapel'] ?>">Edit</a></li>
							<li><a href="index.php?menu=mapel&action=delete&id=<?php echo $dataMapel['id_mapel'] ?>">Delete</a></li>
						</ul>
					</div>
				</div>
			</div><!-- card-pelajaran -->
			<?php
		}
	 ?>

	

</div><!-- container-pelajaran -->