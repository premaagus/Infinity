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
		<a href="index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=tugas&action=add">Tambah Materi</a>
	</div><!-- btn-add -->
</div><!-- add-new -->
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
			<th>Action</th>
		</tr>
		<?php 
			$queryTugas = $koneksi->query("SELECT * FROM tb_tugas WHERE id_mapel = $id_mapel AND id_kelas = $id_kelas");
			$no = 1;
			while ($dataTugas = $queryTugas->fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $dataTugas['nama_tugas'] ?></td>
					<td><?php echo $dataTugas['desc_tugas'] ?></td>
					<td><?php echo date('d-F-Y H:i', strtotime($dataTugas['tugas_mulai'])) ?></td>
					<td><?php echo date('d-F-Y H:i', strtotime($dataTugas['tugas_selesai'])) ?></td>
					<td><?php echo $dataTugas['file_tugas'] ?></td>
					<td><?php echo $dataTugas['status'] ?></td>
					<td>
						<div class="btn-edit"><a href="?menu=jadwal&view=tugas&id_tugas=<?php echo $dataTugas['id_tugas'] ?>&action=edit">Edit</a></div>
						<div class="btn-delete"><a href="?menu=jadwal&view=tugas&id_tugas=<?php echo $dataTugas['id_tugas'] ?>&action=delete">Delete</a></div>
					</td>
				</tr>
				<?php
				$no++;
			}
		 ?>
		
	</table>
</div>

<script>
	function display_c(){
	  var refresh=1000; 
	  mytime=setTimeout('display_ct()',refresh)
	}

	function display_ct() {
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4 && xhr.status == 200) {
				var ajax = 'true';
			}
		}
		xhr.open("POST", "../controller/time_controller.php", true);
		xhr.send();
		start = display_c();

	}

	display_ct();
</script>