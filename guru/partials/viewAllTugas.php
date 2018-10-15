<script src="js/alert.js"></script>

<?php 
	$id_guru = $_SESSION['user']['id_guru'];
	$queryJadwal = $koneksi->query("SELECT * FROM tb_jadwal WHERE id_guru = $id_guru");
	$dataJadwal = $queryJadwal->fetch_assoc();
	$id_mapel = $dataJadwal['id_mapel'];
 ?>

<h1>Tugas</h1>
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
			<th>Kelas</th>
			<th>Tugas Mulai</th>
			<th>Tugas Selesai</th>
			<th>File Tugas</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php 
			$queryAllTugas = $koneksi->query("SELECT * FROM tb_tugas WHERE id_mapel = $id_mapel");
			$no = 1;
			while ($dataAllTugas = $queryAllTugas->fetch_assoc()) {
				$id_kelas = $dataAllTugas['id_kelas'];
				$id_mapel = $dataAllTugas['id_mapel'];
				$queryKelas = $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");
				$dataKelas = $queryKelas->fetch_assoc();
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $dataAllTugas['nama_tugas'] ?></td>
					<td><?php echo $dataAllTugas['desc_tugas'] ?></td>
					<td><?php echo $dataKelas['nama_kelas'] ?></td>
					<td><?php echo date('d-F-Y H:i', strtotime($dataAllTugas['tugas_mulai'])) ?></td>
					<td><?php echo date('d-F-Y H:i', strtotime($dataAllTugas['tugas_selesai'])) ?></td>
					<td><div class="btn-edit"><a href="?menu=jadwal&view=tugas&id_tugas=<?php echo $dataAllTugas['id_tugas'] ?>&action=download">Download</a></div></td>
					<td><?php echo $dataAllTugas['status'] ?></td>
					<td>
						<div class="btn-edit"><a href="?menu=jadwal&view=tugas&id_tugas=<?php echo $dataAllTugas['id_tugas'] ?>&action=edit">Edit</a></div>
						<div class="btn-delete"><a href="?menu=jadwal&view=tugas&id_tugas=<?php echo $dataAllTugas['id_tugas'] ?>&action=delete">Delete</a></div>
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