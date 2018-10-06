<h1>Mata Pelajaran</h1>
<hr>

<div class="btn-add">
	<a href="index.php?menu=mapel&action=add">Tambah Mapel</a>
</div><!-- btn-add -->

<div class="container-pelajaran d-flex fd-row f-row j-str i-ard">

	<?php 
		$queryMapel = $koneksi->query("SELECT * FROM tb_mapel");
		while ($dataMapel = $queryMapel->fetch_assoc()) {
			?>
			<div class="card-pelajaran">
				<a href="index.php?menu=mapel&id=<?= $dataMapel['id_mapel'] ?>">
					<img src="images/kelas/<?= $dataMapel['background_mapel'] ?>">
					<h3><?= $dataMapel['nama_mapel'] ?></h3>
					<h4>Made Sutisna</h4>
				</a>
			</div><!-- card-pelajaran -->
			<?php
		}
	 ?>

	

</div><!-- container-pelajaran -->