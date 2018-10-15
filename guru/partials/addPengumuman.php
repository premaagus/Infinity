<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" onsubmit="return false">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Pengumuman</p>
			<input type="text" name="nama_mapel" id="nama_mapel" placeholder="Input Pengumuman Disini..." required>
			<div class="alert-err">
				<p>Pengumuman Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit" onclick="addMapel()">Submit</button>
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