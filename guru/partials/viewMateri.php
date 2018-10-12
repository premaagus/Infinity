<?php 
	$id_mapel = $_GET['id_mapel'];
	$id_kelas = $_GET['id_kelas'];

	$queryKelas = $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");
	$dataKelas = $queryKelas->fetch_assoc();
 ?>

<h1>Materi</h1>
<a href="#">
	<h2><?php echo $dataKelas['nama_kelas']; ?></h2>
</a>
<hr>

<div class="add-new d-flex j-end i-ctr">
	<div class="btn-add">
		<a href="index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=materi&action=add">Tambah Materi</a>
	</div><!-- btn-add -->
</div><!-- add-new -->
<div class="table-control">
	<table>
		<tr>
			<th>No</th>
			<th>Nama Materi</th>
			<th>Deskripsi Materi</th>
			<th>File Materi</th>
		</tr>
		<?php 
			$queryMateri = $koneksi->query("SELECT * FROM tb_materi WHERE id_mapel = $id_mapel AND id_kelas = $id_kelas");
			$no = 1;
			while ($dataMateri = $queryMateri->fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $dataMateri['nama_materi'] ?></td>
					<td><?php echo $dataMateri['desc_materi'] ?></td>
					<td><a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a></td>
				</tr>
				<?php
				$no++;
			}
		 ?>
		
	</table>
</div>