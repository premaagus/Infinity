<h1>Mata Pelajaran</h1>
<hr>

<div class="btn-add">
	<a href="index.php?menu=mapel&action=add">Tambah Mapel</a>
</div><!-- btn-add -->

<div class="container-pelajaran d-flex fd-row f-row j-ctr i-ard">

	<?php 
		$queryMapel = $koneksi->query("SELECT * FROM tb_mapel");
		while ($dataMapel = $queryMapel->fetch_assoc()) {
			?>
			<div class="card-pelajaran">
				<a href="index.php?menu=mapel&id=<?php echo $dataMapel['id_mapel'] ?>">
					<img src="images/kelas/<?php echo $dataMapel['background_mapel'] ?>">
					<h3><?php echo $dataMapel['nama_mapel'] ?></h3>
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

<script>
	var btnPreference = document.querySelectorAll('.preference');
	for (var i = 0; i < btnPreference.length; i++){
		btnPreference[i].addEventListener('click', function(){
			this.querySelectorAll('.container-preference')[0].classList.toggle('visible');
			this.querySelectorAll('.container-preference')[0].style.opacity = '1';
		});
	}
</script>