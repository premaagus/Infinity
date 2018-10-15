<?php 
	$id_kelas = $_GET['id_kelas'];
	$id_mapel = $_GET['id_mapel'];
 ?>

<h1>Pengumuman</h1>
<hr>

<div class="add-new d-flex j-end i-ctr">
	<div class="btn-add">
		<a href="index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=pengumuman&action=edit">Tambah Materi</a>
	</div><!-- btn-add -->
</div><!-- add-new -->

<div class="container-pengumuman">
	<div class="pengumuman d-flex">
		<div class="img-pengumuman">
			<img src="images/profile/profile1.jpg">
		</div><!-- img-pengumuman -->
		<div class="text-pengumuman">
			<h4>Evi Dwi</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<div class="acc"></div>
		</div><!-- text-pengumuman -->
	</div><!-- pengumuman -->
</div><!-- container-pengumuman -->