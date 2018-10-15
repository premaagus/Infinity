<?php 
	function countRows($table){
		$koneksi = new Mysqli("localhost", "root", "", "db_infinity");
		$queryCount = $koneksi->query("SELECT * FROM $table");
		$num_rows = $queryCount->num_rows;
		echo $num_rows;
	}
 ?>

<h1>Master Data</h1>
<hr>
<div class="container-dashboard d-flex f-row fd-row j-ard">
	<div class="dashboard-show d-flex">
		<div class="dashboard-nilai">
			<h1><?php countRows('tb_siswa') ?></h1>
		</div><!-- dashboard-nilai -->
		<div class="dashboard-text">
			<h1>Total Siswa</h1>
		</div><!-- dashboard-nilai -->
	</div><!-- dashboard-kelas -->
	<div class="dashboard-show d-flex">
		<div class="dashboard-nilai">
			<h1><?php countRows('tb_guru') ?></h1>
		</div><!-- dashboard-nilai -->
		<div class="dashboard-text">
			<h1>Total Guru</h1>
		</div><!-- dashboard-nilai -->
	</div><!-- dashboard-kelas -->
	<div class="dashboard-show d-flex">
		<div class="dashboard-nilai">
			<h1><?php countRows('tb_mapel') ?></h1>
		</div><!-- dashboard-nilai -->
		<div class="dashboard-text">
			<h1>Total Pelajaran</h1>
		</div><!-- dashboard-nilai -->
	</div><!-- dashboard-kelas -->
	<div class="dashboard-show d-flex">
		<div class="dashboard-nilai">
			<h1><?php countRows('tb_kelas') ?></h1>
		</div><!-- dashboard-nilai -->
		<div class="dashboard-text">
			<h1>Total Kelas</h1>
		</div><!-- dashboard-nilai -->
	</div><!-- dashboard-kelas -->
</div><!-- container-dashboard -->

<h1>Tugas Terbaru</h1>
<hr>

<div class="container-dashboard d-flex j-ard">
			
		
<?php 
	$id_siswa = $_SESSION['user']['id_siswa'];
	$querySiswa = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = $id_siswa");
	$dataSiswa = $querySiswa->fetch_assoc();

	$id_kelas = $dataSiswa['id_kelas'];

	$queryTugas = $koneksi->query("SELECT * FROM tb_tugas WHERE id_kelas = $id_kelas ORDER BY id_tugas DESC LIMIT 2");
	while ($dataTugas = $queryTugas->fetch_assoc()) {
		$id_mapel 		= $dataTugas['id_mapel'];
		$queryMapel 	= $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
		$dataMapel 		= $queryMapel->fetch_assoc();
		$tugas_mulai 	= $dataTugas['tugas_mulai'];
		$tugas_selesai 	= $dataTugas['tugas_selesai'];
		$tanggal_mulai 	= date('d F', strtotime($tugas_mulai));
		$tugas_selesai 	= date('d F', strtotime($tugas_selesai));
		?>

		<div class="dashboard-info">
				<div class="tugas d-flex">
					<div class="foto">
						<img src="images/profile/profile1.jpg">
					</div><!-- icon -->
					<div class="text">
						<h1><?php echo $dataMapel['nama_mapel'] ?></h1>
						<h3><?php echo $dataTugas['nama_tugas'] ?></h3>			
						<p><?php echo $tanggal_mulai ?> - <?php echo $tugas_selesai ?></p>
					</div><!-- text -->
				</div><!-- tugas -->
			</div><!-- dashboard-info -->
		<?php
	}
 ?>

</div>
	