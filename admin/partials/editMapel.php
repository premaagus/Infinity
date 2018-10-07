<?php 
	$id = $_GET['id'];
	$queryMapel = $koneksi->query("SELECT * FROM tb_mapel WHERE id_mapel = '$id'");
	$dataMapel = $queryMapel->fetch_assoc();
 ?>

 <h1>Edit Mata Pelajaran</h1>
<hr>
<form action="" method="POST" onsubmit="return false">
	<input type="hidden" name="id" id="id_mapel" value="<?php echo $id ?>">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Mata Pelajaran</p>
			<input type="text" name="nama_mapel" id="nama_mapel" placeholder="Input Nama Mata Pelajaran Disini..." required value="<?php echo $dataMapel['nama_mapel'] ?>">
			<div class="alert-err">
				<p>Nama Mata Pelajaran Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Jumlah jam</p>
			<input type="number" name="jumlah_jam" id="jumlah_jam" placeholder="Input Jumlah jam Mata Pelajaran Disini..." required value="<?php echo $dataMapel['jumlah_jam'] ?>">
			<div class="alert-err">
				<p>Nama Mata Pelajaran Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>

		<div class="form-control-block">
			<p>Background</p>
			<select name="background_mapel" id="background_mapel">
				<option value="merah.png" <?php if($dataMapel['background_mapel'] == 'merah.png'){echo 'selected';} ?>>Merah</option>
				<option value="ijo.png" <?php if($dataMapel['background_mapel'] == 'ijo.png'){echo 'selected';} ?>>Hijau</option>
				<option value="kuning.png" <?php if($dataMapel['background_mapel'] == 'kuning.png'){echo 'selected';} ?>>Kuning</option>
				<option value="biru.png" <?php if($dataMapel['background_mapel'] == 'biru.png'){echo 'selected';} ?>>Biru</option>
				<option value="ungu.png" <?php if($dataMapel['background_mapel'] == 'ungu.png'){echo 'selected';} ?>>Ungu</option>
				<option value="orange.png" <?php if($dataMapel['background_mapel'] == 'orange.png'){echo 'selected';} ?>>Orange</option>
			 </select>
			<div class="alert-err">
				<p>Gambar Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit" onclick="addMapel()">Submit</button>
	</div>
</form>

<h1>Preview</h1>
<hr>
<div class="card-pelajaran">
	<img id="img-mapel" src="images/kelas/merah.png">
	<h3 id="display-namaMapel">Matematika</h3>
	<h4 id="display-namaGuru"></h4>
</div><!-- card-pelajaran -->

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

	function addMapel(){
		var id_mapel = document.getElementById('id_mapel');
		var nama_mapel = document.getElementById('nama_mapel');
		var jumlah_jam = document.getElementById('jumlah_jam');
		var background_mapel = document.getElementById('background_mapel');
		var data = "nama_mapel="+nama_mapel.value+"&jumlah_jam="+jumlah_jam.value+"&background_mapel="+background_mapel.value+"&id_mapel="+id_mapel.value;

		if (nama_mapel.value == "") {
			nama_mapel.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			nama_mapel.focus();
		}
		else{
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if (xhr.readyState == 4 && xhr.status == 200) {
					console.log(xhr.responseText);
					if (xhr.responseText == 'success') {
						successAlert('Sukses', 'Berhasil Mengedit Mapel');
						document.addEventListener('click', function(){
							location.href = 'index.php?menu=mapel';
						});
					}
					else{
						errorAlert('Error', 'Gagal Menambahkan Mapel');
					}
				}
			}
			xhr.open('POST', 'controller/editMapel_controller.php', true);
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.send(data);
		}
	}
</script>

<script>
	function display_c(){
	  var refresh=100; 
	  mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
	var nama_mapel = document.getElementById('nama_mapel');
	var background_mapel = document.getElementById('background_mapel');
	var display_nama = document.getElementById('display-namaMapel');
	var img_mapel = document.getElementById('img-mapel');
	var display_guru = document.getElementById('display-namaGuru');
	start = display_c();
	display_nama.innerHTML = nama_mapel.value;
	img_mapel.src = "images/kelas/"+background_mapel.value;

}

display_ct();
</script>