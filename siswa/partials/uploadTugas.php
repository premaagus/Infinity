<?php 
	$id_tugas = $_GET['id_tugas'];
	$queryTugas = $koneksi->query("SELECT * FROM tb_tugas WHERE id_tugas = $id_tugas");
	$dataTugas = $queryTugas->fetch_assoc();
	$id_mapel = $dataTugas['id_mapel'];
	$id_kelas = $dataTugas['id_kelas'];
 ?>

<h1>Upload Tugas</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Tugas</p>
			<input type="text" required readonly value="<?php echo $dataTugas['nama_tugas'] ?>">
			<div class="alert-err">
				<p>File Materi Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>Deskripsi Tugas</p>
			<input type="text" required readonly value="<?php echo $dataTugas['desc_tugas'] ?>">
			<div class="alert-err">
				<p>File Tugas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>File Tugas</p>
			<input type="file" name="file_tugas" id="file_tugas" placeholder="Input File Materi Disini..." required>
			<div class="alert-err">
				<p>File Materi Tidak Boleh Kosong</p>
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
		$id_siswa = $_SESSION['user']['id_siswa'];
		$id_tugas = $_GET['id_tugas'];
		$file_name = $_FILES['file_tugas']['name'];
		$file_tmp = $_FILES['file_tugas']['tmp_name'];
		$date = date('Y-m-d H:i');

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
			move_uploaded_file($file_tmp, "../files/tugas/siswa/$namaBaru");

			$queryAdd = $koneksi->query("INSERT INTO tb_siswa_tugas VALUES ($id_tugas, $id_siswa, NULL, '$namaBaru', '$date') ");

			if ($queryAdd) {
				?>
				<script>
					successAlert("Sukses", "Tugas Telah Diupload!");
					document.addEventListener('click', function(){
						location.href = "index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=tugas"
					});
				</script>
				<?php
			}
			else{
				?>
				<script>
					errorAlert("Error", "Tugas Gagal Diupload!");
				</script>
				<?php
			}
		}
	}
 ?>