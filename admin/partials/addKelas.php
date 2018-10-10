<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" onsubmit="return false">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Kelas</p>
			<input type="text" name="nama_kelas" id="nama_kelas" placeholder="Input Nama Kelas Disini..." required>
			<div class="alert-err">
				<p>Nama Kelas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div><!-- alert-err -->
		</div><!-- form-cotrol-block -->
		
		<div class="form-control-block">
			<p>Ruangan</p>
			<input type="number" name="ruangan" id="ruangan" placeholder="Input ruangan Disini..." required>
			<div class="alert-err">
				<p>Nama Kelas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div><!-- alert-err -->
		</div><!-- form-cotrol-block -->
		
	</div><!-- container1 -->
	<div class="btn-add">
		<button type="submit" name="btn-submit" onclick="addKelas()">Submit</button>
	</div>
</form>

<script src="js/alert.js"></script>

<script>
	var input 		= document.querySelectorAll('input');
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

	function addKelas(){

		var nama_kelas 	= document.getElementById('nama_kelas');
		var ruangan 	= document.getElementById('ruangan');
		var data = "nama_kelas="+nama_kelas.value+"&ruangan="+ruangan.value;
		if (nama_kelas.value == "") {
			nama_kelas.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
		}
		else{
			nama_kelas.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
			if (ruangan.value == "") {
				ruangan.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			}
			else{
				ruangan.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if (xhr.readyState == 4 && xhr.status == 200) {
						if (xhr.responseText == 'sukses') {
							successAlert("Sukses", "Berhasil Menambahkan Kelas");
							document.addEventListener('click', function(){
								location.href = 'index.php?menu=kelas';
							});
						}
						else{
							errorAlert("Gagal", "Gagal Menambahkan Kelas");
						}
					}
				}
				xhr.open("POST", "controller/addKelas_controller.php", true);
				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhr.send(data);
			}
		}
	}
</script>