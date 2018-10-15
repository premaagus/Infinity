<h1>Siswa</h1>
<hr>

<div class="add-new d-flex j-end i-ctr">
	<div class="btn-add">
		<a href="index.php?menu=siswa&action=add">Tambah Siswa</a>
	</div><!-- btn-add -->
</div><!-- add-new -->
<div class="container-siswa d-flex fd-row f-row">
	
	<?php 
		$querySiswa = $koneksi->query("SELECT * FROM tb_siswa AS a INNER JOIN tb_user AS b ON a.id_user = b.id_user");
		while ($dataSiswa = $querySiswa->fetch_assoc()) {
			$tanggalLahir = $dataSiswa['tanggal_lahir'];
			$umur = date_diff(date_create("$tanggalLahir"), date_create('today'))->y;
			?>
			<div class="card-siswa d-flex f-col fd-col i-ctr">
				<div class="background">
					
				</div><!-- background -->
				<a href="index.php?menu=profileSiswa&id_siswa=<?php echo $dataSiswa['id_siswa'] ?>">
					<div class="avatar">
						<img src="../img/profile/<?php echo $dataSiswa['profile_img'] ?>">
					</div><!-- avatar -->
					<div class="profil">
						<h3><?php echo $dataSiswa['profile_name'] ?></h3>
						<p><?php echo $umur ?> | <?php echo $dataSiswa['email'] ?></p>
					</div><!-- profil -->
				</a>
				<div class="action d-flex f-row fd-row j-ctr">
					<div class="btn-blue"><a href="index.php?menu=siswa&action=edit&id_user=<?php echo $dataSiswa['id_user'] ?>">Ubah</a></div>
					<div class="btn-red"><a href="index.php?menu=siswa&action=delete&id_user=<?php echo $dataSiswa['id_user'] ?>">Hapus</a></div>
				</div><!-- action -->
			</div><!-- card-siswa -->
			<?php
		}
	 ?>

</div><!-- container-siswa -->