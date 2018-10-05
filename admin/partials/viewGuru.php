<h1>Guru</h1>
<hr>

<div class="add-new d-flex j-end i-ctr">
	<div class="btn-add">
		<a href="index.php?menu=guru&action=add">Tambah Guru</a>
	</div><!-- btn-add -->
</div><!-- add-new -->
<div class="container-siswa d-flex fd-row f-row">
	<?php 
		$queryGuru = $koneksi->query("SELECT * FROM tb_user WHERE id_level = 3");
		while ($dataGuru = $queryGuru->fetch_assoc()) {
			?>
			<div class="card-siswa d-flex f-col fd-col i-ctr">
				<div class="background">
					
				</div><!-- background -->
				<div class="avatar">
					<img src="../img/profile/<?= $dataGuru['profile_img'] ?>">
				</div><!-- avatar -->
				<div class="profil">
					<h3><?= $dataGuru['profile_name'] ?></h3>
					<p><?= $umur ?> | <?= $dataGuru['email'] ?></p>
				</div><!-- profil -->
				<div class="action d-flex f-row fd-row j-ctr">
					<div class="btn-blue"><a href="#">Ubah</a></div>
					<div class="btn-red"><a href="index.php?menu=guru&action=delete&id_user=<?= $dataGuru['id_user'] ?>">Hapus</a></div>
				</div><!-- action -->
			</div><!-- card-siswa -->
			<?php
		}
	 ?>
</div><!-- container-siswa -->