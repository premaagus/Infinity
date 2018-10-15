<h1>Siswa</h1>
<hr>

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
			</div><!-- card-siswa -->
			<?php
		}
	 ?>

</div><!-- container-siswa -->