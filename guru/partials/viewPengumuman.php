<?php 
	$id_kelas = $_GET['id_kelas'];
	$id_mapel = $_GET['id_mapel'];
 ?>

<h1>Pengumuman</h1>
<hr>

<div class="add-new d-flex j-end i-ctr">
	<div class="btn-add">
		<a href="index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=pengumuman&action=add">Add Pengumuman</a>
	</div><!-- btn-add -->
</div><!-- add-new -->

<?php 
	$queryPengumuman = $koneksi->query("SELECT * FROM tb_pengumuman WHERE id_kelas = $id_kelas AND id_mapel = $id_mapel");
	while ($dataPengumuman = $queryPengumuman->fetch_assoc()) {
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
					<img src="images/profile/profile1.jpg">
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



