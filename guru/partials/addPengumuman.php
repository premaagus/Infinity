<h1>Tambah Data</h1>
<hr>
<form action="" method="POST">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Pengumuman</p>
			<input type="text" name="desc_pengumuman" id="desc_pengumuman" placeholder="Input Pengumuman Disini..." required>
			<div class="alert-err">
				<p>Pengumuman Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn_submit">Submit</button>
	</div>
</form>

<script src="js/alert.js"></script>

<script>
	var input = document.querySelectorAll('input');
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
	if (isset($_POST['btn_submit'])) {
		$desc_pengumuman = $_POST['desc_pengumuman'];
		$id_mapel = $_GET['id_mapel'];
		$id_kelas = $_GET['id_kelas'];
		$dateNow = date('Y-m-d H:i');

		$queryAdd = $koneksi->query("INSERT INTO tb_pengumuman VALUES (NULL, '$desc_pengumuman', '$dateNow', $id_mapel, $id_kelas) ");

		if ($queryAdd) {
			?>
			<script>
				successAlert("Sukses", "Pengumuman Telah ditambahkan!");
				document.addEventListener('click', function(){
					location.href = "index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=pengumuman"
				});
			</script>
			<?php
		}
		else{
			?>
			<script>
				errorAlert("Error", "Pengumuman Gagal Ditambahkan");
			</script>
			<?php
		}
	}
 ?>
