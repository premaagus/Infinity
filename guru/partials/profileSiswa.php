<?php 
	$id_siswa = $_GET['id_siswa'];
	$querySiswa = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = $id_siswa");
	$dataSiswa = $querySiswa->fetch_assoc();
	
	$id_user = $dataSiswa['id_user'];
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
			<h5><?php echo $dataSiswa['nama_lengkap'] ?></h5>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Nis</h4>
			<h5><?php echo $dataSiswa['nis'] ?></h5>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Jenis Kelamin</h4>
			<h5><?php echo $dataSiswa['jenis_kelamin'] ?></h5>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Tempat Lahir</h4>
			<h5><?php echo $dataSiswa['tempat_lahir'] ?></h5>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Tanggal Lahir</h4>
			<h5><?php echo date('d F Y', strtotime($dataSiswa['tanggal_lahir'])) ?></h5>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Agama</h4>
			<h5><?php echo $dataSiswa['agama'] ?></h5>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Alamat</h4>
			<h5><?php echo $dataSiswa['alamat'] ?></h5>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>No Telepon</h4>
			<h5><?php echo $dataSiswa['telp'] ?></h5>
		</div><!-- formDetail -->
		<div class="formDetail">
			<h4>Jurusan</h4>
			<h5><?php echo $dataSiswa['jurusan'] ?></h5>
		</div><!-- formDetail -->


	</div><!-- detailDeskripsi -->
</div><!-- container-detailSiswa -->