<?php 
	$queryKelas = $koneksi->query("SELECT * FROM tb_kelas");
 ?>

<div class="btn-addKelas d-flex j-end">
	<a href="index.php?menu=kelas&action=add">Tambah Kelas</a>
</div><!-- btn-add -->

<div class="container-pelajaran d-flex fd-row f-row j-str i-ard">

	<?php 
		while ($dataKelas = $queryKelas->fetch_assoc()) {
			?>
			<div class="card-pelajaran kelas-card">
				<a href="index.php?menu=mapel&id=<?php echo $dataMapel['id_mapel'] ?>">
					<img src="../img/pattern/kelas/pattern-orange.png">
					<h3 class="kelasCapt"><?php echo $dataKelas['nama_kelas'] ?></h3>
				</a>
				<div class="preference">
					<i class="fas fa-ellipsis-v"></i>

					<div class="container-preference">
						<ul>
							<li><a href="index.php?menu=mapel&action=edit&id=<?php echo $dataMapel['id_mapel'] ?>">Edit</a></li>
							<li><a href="index.php?menu=mapel&action=delete&id=<?php echo $dataMapel['id_mapel'] ?>">Delete</a></li>
						</ul>
					</div>
				</div>
			</div><!-- card-pelajaran -->
			<?php
		}
	 ?>

</div><!-- container-pelajaran -->