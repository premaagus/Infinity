<h1>Guru</h1>
<hr>

<div class="add-new d-flex j-end i-ctr">
	<div class="btn-add">
		<a href="index.php?menu=guru&action=add">Tambah Guru</a>
	</div><!-- btn-add -->
</div><!-- add-new -->
<div class="container-siswa d-flex fd-row f-row i-ctr j-ard">
	<?php 
		$queryGuru = $koneksi->query("SELECT * FROM tb_user AS a INNER JOIN tb_guru AS b ON a.id_user = b.id_user WHERE id_level = 3");
		while ($dataGuru = $queryGuru->fetch_assoc()) {
			$tanggalLahir = $dataGuru['tanggal_lahir'];
			$umur = date_diff(date_create("$tanggalLahir"), date_create('today'))->y;
			?>
			<div class="card-siswa d-flex f-col fd-col i-ctr j-ctr">
				<div class="background">
					
				</div><!-- background -->
				<div class="avatar">
					<img src="../img/profile/<?php echo $dataGuru['profile_img'] ?>">
				</div><!-- avatar -->
				<div class="profil">
					<h3><?php echo $dataGuru['profile_name'] ?></h3>
					<p><?php echo $umur ?> | <?php echo $dataGuru['email'] ?></p>
				</div><!-- profil -->
				<div class="action d-flex f-row fd-row j-ctr">
					<div class="btn-blue"><a href="#">Ubah</a></div>
					<div class="btn-red"><a href="index.php?menu=guru&action=delete&id_user=<?php echo $dataGuru['id_user'] ?>">Hapus</a></div>
				</div><!-- action -->
			</div><!-- card-siswa -->
			<?php
		}
	 ?>
</div><!-- container-siswa -->