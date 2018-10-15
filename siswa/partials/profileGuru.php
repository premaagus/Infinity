<?php 
	$id_guru = $_GET['id_guru'];
	$queryGuru = $koneksi->query("SELECT * FROM tb_guru WHERE id_guru = $id_guru");
	$dataGuru = $queryGuru->fetch_assoc();
	
	$id_user = $dataGuru['id_user'];
	$queryUser = $koneksi->query("SELECT * FROM tb_user WHERE id_user = $id_user");
	$dataUser = $queryUser->fetch_assoc();
	
 ?>

<h1>Profile</h1>
<hr>
<div class="container-detailSiswa">
	<div class="detailBackground"></div><!-- detailBackground -->
	<div class="detailFoto">
		<img src="../img/profile/<?php echo $dataUser['profile_img'] ?>">
	</div><!-- detailFoto -->
	<div class="detailDeskripsi d-flex fd-row f-row j-ard i-end">
		<div class="formDetail">
			<h4>Nama Lengkap</h4>
			<h3><?php echo $dataGuru['nama_lengkap'] ?></h3>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>NIK</h4>
			<h3><?php echo $dataGuru['nik'] ?></h3>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Jenis Kelamin</h4>
			<h3><?php echo $dataGuru['jenis_kelamin'] ?></h3>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Tempat Lahir</h4>
			<h3><?php echo $dataGuru['tempat_lahir'] ?></h3>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Tanggal Lahir</h4>
			<h3><?php echo date('d F Y', strtotime($dataGuru['tanggal_lahir'])) ?></h3>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Agama</h4>
			<h3><?php echo $dataGuru['agama'] ?></h3>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Alamat</h4>
			<h3><?php echo $dataGuru['alamat'] ?></h3>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>No Telepon</h4>
			<h3><?php echo $dataGuru['telp'] ?></h3>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Bidang Ilmu</h4>
			<h3><?php echo $dataGuru['bidang_ilmu'] ?></h3>
		</div><!-- formDetail -->


	</div><!-- detailDeskripsi -->
</div><!-- container-detailSiswa -->