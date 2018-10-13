<script src="js/alert.js"></script>

<?php 
	$id_materi 		= $_GET['id_materi'];
	$queryMateri 	= $koneksi->query("SELECT * FROM tb_materi WHERE id_materi = $id_materi");
	$dataMateri		= $queryMateri->fetch_assoc();

	$id_mapel		= $dataMateri['id_mapel'];
	$id_kelas		= $dataMateri['id_kelas'];

	$queryOwn		= $koneksi->query("SELECT * FROM tb_jadwal WHERE id_kelas = $id_kelas AND id_mapel = $id_mapel");
	$dataOwn		= $queryOwn->fetch_assoc();

	if ($dataOwn['id_guru'] != $_SESSION['user']['id_guru']) {
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

 <h1>Edit Materi</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="hidden" id="id_mapel" name="id_mapel" value="<?php echo $_GET['id_mapel'] ?>">
	<input type="hidden" id="id_kelas" name="id_kelas" value="<?php echo $_GET['id_kelas'] ?>">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Judul Materi</p>
			<input type="text" name="nama_materi" id="nama_materi" placeholder="Input Judul Materi Disini..." required value="<?php echo $dataMateri['nama_materi'] ?>">
			<div class="alert-err">
				<p>Judul Materi Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>Deskripsi Materi</p>
			<textarea name="desc_materi" id="desc_materi" placeholder="Input Deskripsi Materi Disini..." required><?php echo $dataMateri['desc_materi'] ?></textarea>
			<div class="alert-err">
				<p>Deskripsi Materi Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>File Materi</p>
			<span style="margin-left: 10px;"><?php echo $dataMateri['file_materi'] ?></span>
			<input type="file" name="file_materi" id="file_materi" placeholder="Input File Materi Disini...">
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
		$id_materi		= $_GET['id_materi'];
		$nama_materi 	= $_POST['nama_materi'];
		$desc_materi 	= $_POST['desc_materi'];
		$file_name		= $_FILES['file_materi']['name'];
		$tmp_file		= $_FILES['file_materi']['tmp_name'];

		function upload(){
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
			return $namaBaru .= ".".$extensiFile;
		}

		if ($_FILES['file_materi']['error'] == 4) {
			$namaBaru = $dataMateri['file_materi'];
		}
		else{
			upload();
			$namaBaru = upload();
		}

		
		$queryEdit = $koneksi->query("UPDATE tb_materi SET  nama_materi='$nama_materi', desc_materi='$desc_materi', file_materi='$namaBaru' WHERE id_materi = $id_materi ");

		if ($queryEdit) {
			?>
			<script>
				successAlert('Sukses', 'Materi berhasil diubah');
				document.addEventListener('click', function(){
					location.href = 'index.php?menu=jadwal'
				});
			</script>
			<?php
		}
		else{
			?>
			<script>
				errorAlert("Gagal", "Materi Gagal Diubah");
			</script>
			<?php
		}
	}
 ?>