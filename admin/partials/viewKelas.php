<?php 
	$queryKelas = $koneksi->query("SELECT * FROM tb_kelas");
 ?>

<div class="btn-addKelas d-flex j-end">
	<a href="index.php?menu=kelas&action=add">Tambah Kelas</a>
</div><!-- btn-add -->

<div class="container-pelajaran d-flex fd-row f-row j-ard i-ard">

	<?php 
		while ($dataKelas = $queryKelas->fetch_assoc()) {
			?>
			<div class="card-pelajaran kelas-card">
				<a href="index.php?menu=kelas&id=<?php echo $dataKelas['id_kelas'] ?>">
					<img src="../img/pattern/kelas/<?php echo $dataKelas['background_kelas'] ?>">
					<h3 class="kelasCapt"><?php echo $dataKelas['nama_kelas'] ?></h3>
				</a>
				<div class="preference">
					<i class="fas fa-ellipsis-v"></i>

					<div class="container-preference">
						<ul>
							<li><a href="index.php?menu=kelas&action=edit&id_kelas=<?php echo $dataKelas['id_kelas'] ?>">Edit</a></li>
							<li><a href="index.php?menu=kelas&action=delete&id_kelas=<?php echo $dataKelas['id_kelas'] ?>">Delete</a></li>
						</ul>
					</div>
				</div>
			</div><!-- card-pelajaran -->
			<?php
		}
	 ?>

</div><!-- container-pelajaran -->

<script>
	var btnPreference = document.querySelectorAll('.preference');
	for (var i = 0; i < btnPreference.length; i++){
		btnPreference[i].addEventListener('click', function(){
			this.querySelectorAll('.container-preference')[0].classList.toggle('visible');
			this.querySelectorAll('.container-preference')[0].style.opacity = '1';
		});
	}
</script>