<?php 
	$id_kelas = $_GET['id_kelas'];
	$id_mapel = $_GET['id_mapel'];
 ?>

<h1>Pengumuman</h1>
<hr>

<?php 
	$queryPengumuman = $koneksi->query("SELECT * FROM tb_pengumuman WHERE id_kelas = $id_kelas AND id_mapel = $id_mapel");
	while ($dataPengumuman = $queryPengumuman->fetch_assoc()) {
		# code...
	}
 ?>

<div class="add-new d-flex j-end i-ctr">
	<div class="btn-add">
		<a href="index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=pengumuman&action=add">Tambah Materi</a>
	</div><!-- btn-add -->
</div><!-- add-new -->

<div class="container-pengumuman">
	<div class="pengumuman d-flex">
		<div class="img-pengumuman">
			<img src="images/profile/profile1.jpg">
		</div><!-- img-pengumuman -->
		<div class="text-pengumuman">
			<div class="d-flex j-btw">
				<h4>Evi Dwi</h4>
				<h5>15 Oktober 2018</h5>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<div class="d-flex j-btw">
				<h6>XII RPL 3</h6>
				<h6>14.60</h6>
			</div>
			<div class="acc"></div>
		</div><!-- text-pengumuman -->
	</div><!-- pengumuman -->
</div><!-- container-pengumuman -->