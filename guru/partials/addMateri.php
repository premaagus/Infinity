<?php 
	
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
	<input type="hidden" id="id_mapel" name="id_mapel" value="<?php echo $_GET['id_mapel'] ?>">
	<input type="hidden" id="id_kelas" name="id_kelas" value="<?php echo $_GET['id_kelas'] ?>">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Judul Materi</p>
			<input type="text" name="nama_materi" id="nama_materi" placeholder="Input Judul Materi Disini..." required>
			<div class="alert-err">
				<p>Judul Materi Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>Deskripsi Materi</p>
			<textarea name="desc_materi" id="desc_materi" placeholder="Input Deskripsi Materi Disini..." required></textarea>
			<div class="alert-err">
				<p>Deskripsi Materi Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>File Materi</p>
			<input type="file" name="file_materi" id="file_materi" placeholder="Input File Materi Disini..." required>
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
		$id_mapel		= $_POST['id_mapel'];
		$id_kelas 		= $_POST['id_kelas'];
		$nama_materi 	= $_POST['nama_materi'];
		$desc_materi 	= $_POST['desc_materi'];
		$file_name		= $_FILES['file_materi']['name'];
		$tmp_file		= $_FILES['file_materi']['tmp_name'];

		//cek file
		$file_name = $_FILES['file_materi']['name'];
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
		$namaBaru .= ".".$extensiFile;
		move_uploaded_file($tmp_file, "../files/materi/$namaBaru");
		
		$queryAdd = $koneksi->query("INSERT INTO tb_materi VALUES (NULL, $id_mapel, $id_kelas, '$nama_materi', '$desc_materi', '$namaBaru') ");

		if ($queryAdd) {
			?>
			<script>
				successAlert("Sukses", "Materi Berhasil Ditambahkan");
				document.addEventListener('click', function(){
					location.href = "index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=materi";
				});
			</script>
			<?php
		}
		else{
			?>
			<script>
				errorAlert("Gagal", "Materi Gagal Ditambahkan");
			</script>
			<?php
		}
	}
 ?>