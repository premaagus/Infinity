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
			<h1><?php countRows('tb_siswa'); ?></h1>
		</div><!-- dashboard-nilai -->
		<div class="dashboard-text">
			<h1>Siswa</h1>
		</div><!-- dashboard-nilai -->
	</div><!-- dashboard-kelas -->
	<div class="dashboard-show d-flex">
		<div class="dashboard-nilai">
			<h1><?php countRows('tb_guru'); ?></h1>
		</div><!-- dashboard-nilai -->
		<div class="dashboard-text">
			<h1>Guru</h1>
		</div><!-- dashboard-nilai -->
	</div><!-- dashboard-kelas -->
	<div class="dashboard-show d-flex">
		<div class="dashboard-nilai">
			<h1><?php countRows('tb_mapel'); ?></h1>
		</div><!-- dashboard-nilai -->
		<div class="dashboard-text">
			<h1>Pelajaran</h1>
		</div><!-- dashboard-nilai -->
	</div><!-- dashboard-kelas -->
	<div class="dashboard-show d-flex">
		<div class="dashboard-nilai">
			<h1><?php countRows('tb_kelas'); ?></h1>
		</div><!-- dashboard-nilai -->
		<div class="dashboard-text">
			<h1>Kelas</h1>
		</div><!-- dashboard-nilai -->
	</div><!-- dashboard-kelas -->
</div><!-- container-dashboard -->