<h1>Tambah Data</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="container1 d-flex f-row">

		<div class="form-control-block">
			<p>Nama Mata Pelajaran</p>
			<input type="text" name="nama_mapel" id="nama_mapel" placeholder="Input Nama Mata Pelajaran Disini..." required>
			<div class="alert-err">
				<p>Nama Mata Pelajaran Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control-block">
			<p>Nama Guru</p>
			<input type="text" name="nama_guru" id="nama_guru" placeholder="Input Nama Guru Disini..." required>
			<div class="alert-err">
				<p>Nama Guru Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
	</div>
	<div class="btn-add">
		<button type="submit" name="btn-submit">Submit</button>
	</div>
</form>