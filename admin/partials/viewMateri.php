<h1>Jadwal</h1>
<hr>

<div class="add-new d-flex j-end i-ctr">
	<div class="btn-add">
		<a href="index.php?menu=jadwal&action=add">Tambah Jadwal</a>
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

			$queryJadwal = $koneksi->query("SELECT * FROM tb_jadwal");
			$no = 1;
			while ($dataJadwal = $queryJadwal->fetch_assoc()) {
				$jam_mulai = $dataJadwal['jam_mulai'];
				$jam_selesai = $dataJadwal['jam_selesai'];

				//key
				$id_mapel 	= $dataJadwal['id_mapel'];
				$id_guru 	= $dataJadwal['id_guru'];
				$id_kelas 	= $dataJadwal['id_kelas'];

				//query
				$queryMapel 	= $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = $id_mapel");
				$queryGuru 		= $koneksi->query("SELECT * FROM tb_guru AS a INNER JOIN tb_user AS b ON a.id_user = b.id_user WHERE id_guru = $id_guru");
				$queryKelas 	= $koneksi->query("SELECT * FROM tb_kelas WHERE id_kelas = $id_kelas");

				//data
				$dataMapel = $queryMapel->fetch_assoc();
				$dataGuru = $queryGuru->fetch_assoc();
				$dataKelas = $queryKelas->fetch_assoc();

				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $dataMapel['nama_mapel'] ?></td>
					<td><?php echo $dataGuru['profile_name'] ?></td>
					<td><?php echo $dataJadwal['hari'] ?></td>
					<td><?php echo date("H:i", strtotime("$jam_mulai")); ?></td>
					<td><?php echo date("H:i", strtotime("$jam_selesai")); ?></td>
					<td><?php echo $dataKelas['nama_kelas'] ?></td>
					<td><?php echo $dataJadwal['tahun_ajaran'] ?></td>
					<td>
						<div class="btn-edit"><a href="?menu=jadwal&action=edit&id=<?= $dataJadwal['id_jadwal'] ?>">Edit</a></div>
						<div class="btn-delete"><a href="?menu=jadwal&action=delete&id=<?= $dataJadwal['id_jadwal'] ?>">Delete</a></div>
					</td>
				</tr>
				<?php
				$no++;
			}

		 ?>
	</table>
</div>