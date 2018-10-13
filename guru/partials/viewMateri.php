<script src="js/alert.js"></script>

<?php 
	$id_mapel = $_GET['id_mapel'];
	$id_kelas = $_GET['id_kelas'];

	$queryMapel 	= $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
	$queryKelas 	= $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");
	$queryJadwal 	= $koneksi->query("SELECT * FROM tb_jadwal WHERE id_kelas = $id_kelas AND id_mapel = $id_mapel");
	$dataKelas 		= $queryKelas->fetch_assoc();
	$dataMapel 		= $queryMapel->fetch_assoc();
	$dataJadwal		= $queryJadwal->fetch_assoc();

	if ($dataJadwal['id_guru'] != $_SESSION['user']['id_guru']) {
		?>
		<script>
			errorAlert("Error", "Anda Tidak Memiliki Akses");
			document.addEventListener("click", function(){
				location.href = 'index.php?menu=jadwal';
			});
		</script>
		<?php
	}
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
					<td>
						<div class="btn-edit"><a href="?menu=jadwal&view=materi&id_materi=<?php echo $dataMateri['id_materi'] ?>&action=edit">Edit</a></div>
						<div class="btn-delete"><a href="?menu=jadwal&view=materi&id_materi=<?php echo $dataMateri['id_materi'] ?>&action=delete">Delete</a></div>
					</td>
				</tr>
				<?php
				$no++;
			}
		 ?>
		
	</table>
</div>