<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Kelas</p>
			<input type="text" name="nama_kelas" id="nama_kelas" placeholder="Input Nama Kelas Disini..." required>
			<div class="alert-err">
				<p>Nama Kelas Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div><!-- alert-err -->
		</div><!-- form-cotrol-block -->
		
	</div><!-- container1 -->
	<div class="btn-add">
		<button type="submit" name="btn-submit">Submit</button>
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

	document.addEventListener('DOMContentLoaded', function(){
		
	});
</script>