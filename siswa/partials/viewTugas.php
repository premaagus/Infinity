<?php 
	$id_mapel = $_GET['id_mapel'];
	$id_kelas = $_GET['id_kelas'];

	$queryMapel = $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
	$queryKelas = $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");

	$dataKelas 		= $queryKelas->fetch_assoc();
	$dataMapel 		= $queryMapel->fetch_assoc();
 ?>

<h1>Tugas <?php echo $dataMapel['nama_mapel'] ?></h1>
<a href="#">
	<h2><?php echo $dataKelas['nama_kelas']; ?></h2>
</a>
<hr>

<div class="table-control">
	<table>
		<tr>
			<th>No</th>
			<th>Nama Tugas</th>
			<th>Deskripsi Tugas</th>
			<th>Tugas Mulai</th>
			<th>Tugas Selesai</th>
			<th>File Tugas</th>
			<th>Status</th>
		</tr>
		<?php 
			$queryTugas = $koneksi->query("SELECT * FROM tb_tugas WHERE id_mapel = $id_mapel AND id_kelas = $id_kelas");
			$no = 1;
			while ($dataTugas = $queryTugas->fetch_assoc()) {
				$tugas_mulai = $dataTugas['tugas_mulai'];
				$tugas_selesai = $dataTugas['tugas_selesai'];
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $dataTugas['nama_tugas'] ?></td>
					<td><?php echo $dataTugas['desc_tugas'] ?></td>
					<td><?php echo date('d-F-Y H:i', strtotime($tugas_mulai)) ?></td>
					<td><?php echo date('d-F-Y H:i', strtotime($tugas_selesai)) ?></td>
					<td>
						<div class="btn-edit"><a href="?menu=jadwal&view=materi&id_materi=<?php echo $dataTugas['id_materi'] ?>&action=download">Download</a></div>
					</td>
					<td><?php echo $dataTugas['status'] ?></td>
				</tr>
				<?php
				$no++;
			}
		 ?>
		
	</table>
</div>