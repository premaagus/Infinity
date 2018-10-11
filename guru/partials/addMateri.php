<h1>Tambah Materi</h1>
<hr>
<form action="" method="POST" onsubmit="return false">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Judul Materi</p>
			<input type="text" name="capt_materi" id="capt_materi" placeholder="Input Judul Materi Disini..." required>
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
		<div class="form-control-block">
			<p>Background</p>
			<select name="background_mapel" id="background_mapel">
				<option value="merah.png">Merah - Akademik</option>
				<option value="ijo.png">Hijau - Akademik</option>
				<option value="kuning.png">Kuning - Akademik</option>
				<option value="biru.png">Biru - Produktif</option>
				<option value="ungu.png">Ungu - Produktif</option>
				<option value="orange.png">Orange - Produktif</option>
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
		var nama_mapel 			= document.getElementById('nama_mapel');
		var jumlah_jam 			= document.getElementById('jumlah_jam');
		var background_mapel 	= document.getElementById('background_mapel');
		var data 				= "nama_mapel="+nama_mapel.value+"&jumlah_jam="+jumlah_jam.value+"&background_mapel="+background_mapel.value;

		if (nama_mapel.value == "") {
			nama_mapel.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			nama_mapel.focus();
		}
		else{
			if (jumlah_jam.value == "") {
				nama_mapel.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
				nama_mapel.focus();
			}
			else{
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if (xhr.readyState == 4 && xhr.status == 200) {
						console.log(xhr.responseText);
						if (xhr.responseText == 'success') {
							successAlert('Sukses', 'Berhasil Menambahkan Mapel');
							document.addEventListener('click', function(){
								location.href = 'index.php?menu=mapel';
							});
						}
						else{
							errorAlert('Error', 'Gagal Menambahkan Mapel');
						}
					}
				}
				xhr.open('POST', 'controller/addMapel_controller.php', true);
				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhr.send(data);
			}
		}
	}
</script>

<script>
	function display_c(){
	  var refresh=100; 
	  mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
	var nama_mapel 			= document.getElementById('nama_mapel');
	var background_mapel 	= document.getElementById('background_mapel');
	var display_nama 		= document.getElementById('display-namaMapel');
	var img_mapel 			= document.getElementById('img-mapel');
	var display_guru 		= document.getElementById('display-namaGuru');
	start = display_c();
	display_nama.innerHTML = nama_mapel.value;
	img_mapel.src = "images/kelas/"+background_mapel.value;

}

display_ct();
</script>