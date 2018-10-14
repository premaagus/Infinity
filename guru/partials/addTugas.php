<?php 
	$date = date('Y-m-d');
	$time = date('H:i');
	$dateTime = $date."T".$time;
	$id_mapel = $_GET['id_mapel'];
	$id_kelas = $_GET['id_kelas'];

	$queryCheck = $koneksi->query("SELECT * FROM tb_jadwal WHERE id_mapel = $id_mapel AND id_kelas = $id_kelas");
	$dataCheck = $queryCheck->fetch_assoc();

	if ($dataCheck['id_guru'] != $_SESSION['user']['id_guru']) {
		?>
		<script>
			errorAlert("Error", "Akses ditolak!");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=index';
			});
		</script>
		<?php
	}
 ?>
<h1>Tambah Materi</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="hidden" id="id_mapel" name="id_mapel" value="<?php echo $id_mapel ?>">
	<input type="hidden" id="id_kelas" name="id_kelas" value="<?php echo $id_kelas ?>">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Judul Tugas</p>
			<input type="text" name="nama_tugas" id="nama_tugas" placeholder="Input Judul Tugas Disini..." required>
			<div class="alert-err">
				<p>Judul Tugas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>Deskripsi Tugas</p>
			<textarea name="desc_tugas" id="desc_tugas" placeholder="Input Deskripsi Tugas Disini..." required></textarea>
			<div class="alert-err">
				<p>Deskripsi Tugas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>File Materi</p>
			<input type="file" name="file_tugas" id="file_tugas" placeholder="Input File Tugas Disini..." required>
			<div class="alert-err">
				<p>File Tugas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control">
			<p>Mulai</p>
			<input type="datetime-local" name="tugas_mulai" id="tugas_mulai" placeholder="Input File Materi Disini..." required value="<?php echo $dateTime ?>">
			<div class="alert-err">
				<p>Tanggal Mulai Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control">
			<p>Selesai</p>
			<input type="datetime-local" name="tugas_selesai" id="tugas_selesai" placeholder="Input File Materi Disini..." required>
			<div class="alert-err">
				<p>Tanggal Selesai Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit">Submit</button>
	</div>
</form>

<script src="js/alert.js"></script>

<script>
	var input = document.getElementsByTagName('input');
	var textarea = document.getElementsByTagName('textarea')[0];
	textarea.addEventListener('keyup', function(){
		if (this.value == "") {
			this.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
		}
		else{
			this.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
		}
	});
	for (var i = 0; i < input.length; i++){
		input[i].addEventListener('keyup', function(){
			if (this.value == "") {
				this.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			}
			else{
				this.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
			}
		});

	}
</script>

<?php 
	if (isset($_POST['btn-submit'])) {
		$id_mapel 		= $_POST['id_mapel'];
		$id_kelas 		= $_POST['id_kelas'];
		$nama_tugas 	= $_POST['nama_tugas'];
		$desc_tugas 	= $_POST['desc_tugas'];
		$tugas_mulai 	= $_POST['tugas_mulai'];
		$tugas_selesai 	= $_POST['tugas_selesai'];
		$file_name		= $_FILES['file_tugas']['name'];
		$file_tmp		= $_FILES['file_tugas']['tmp_name'];

		function upload(){
			//cek file
			$file_name = $_FILES['file_tugas']['name'];
			$extensiFileValid = ['docx', 'doc', 'docs', 'ppt', 'pptx', 'xls', 'pdf', 'txt'];
			$extensiFile = explode('.', $file_name);
			$extensiFile = strtolower(end($extensiFile));
			if (!in_array($extensiFile, $extensiFileValid)) {
				?>
				<script>
					errorAlert("Error", "Format file tidak didukung");
				</script>
				<?php
				die();
			}

			//Verified file
			$namaBaru = uniqid();
			return $namaBaru .= ".".$extensiFile;
		}

		if ($_FILES['file_tugas']['error'] == 4) {
			?>
			<script>
				errorAlert("Error", "File Kosong!");
			</script>
			<?php
		}
		else{
			upload();
			$namaBaru = upload();
			move_uploaded_file($file_tmp, "../files/tugas/guru/$namaBaru");
		}

		if ($tugas_selesai < $tugas_selesai) {
			?>
			<script>
				errorAlert("Error", "Format Waktu Tidak Valid");
			</script>
			<?php
		}
		else{
			$queryAdd = $koneksi->query("INSERT INTO tb_tugas VALUES (NULL, $id_mapel, $id_kelas, '$nama_tugas', '$desc_tugas', '$tugas_mulai', '$tugas_selesai', '$namaBaru', 'ready') ");
			if ($queryAdd) {
				?>
				<script>
					successAlert("Sukses", "Tugas Telah ditambahkan!");
					document.addEventListener('click', function(){
						location.href = "index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=tugas"
					});
				</script>
				<?php
			}
			else{
				?>
				<script>
					errorAlert("Error", "Format file tidak didukung");
				</script>
				<?php
			}
		}
	}
 ?>