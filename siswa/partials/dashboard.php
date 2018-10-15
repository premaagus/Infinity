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
		<div class="dashboard-info">
			<div class="tugas d-flex">
				<div class="foto">
					<img src="images/profile/profile1.jpg">
				</div><!-- icon -->
				<div class="text">
					<h1>Matematika</h1>
					<h3>Kuartil Desil</h3>
					<p>14.30 - 16.30</p>
				</div><!-- text -->
			</div><!-- tugas -->
		</div><!-- dashboard-info -->
		<div class="dashboard-info">
			<div class="tugas d-flex">
				<div class="foto">
					<img src="images/profile/profile1.jpg">
				</div><!-- icon -->
				<div class="text">
					<h1>Matematika</h1>
					<h3>Kuartil Desil</h3>			
					<p>14.30 - 16.30</p>
				</div><!-- text -->
			</div><!-- tugas -->
		</div><!-- dashboard-info -->
	</div>