<script src="js/alert.js"></script>

<?php 
	$id_user = $_GET['id_user'];
	$queryUser = $koneksi->query("SELECT * FROM tb_user WHERE id_user = $id_user");
	$data_user = $queryUser->fetch_assoc();

	$gambar = $data_user['profile_img'];
	$directory = "../img/profile/";
	
	if ($gambar != 'profile.png') {
		if (file_exists($directory.$gambar)) {
			unlink($directory.$gambar);
		}
	}

	$queryDeleteSiswa = $koneksi->query("DELETE FROM tb_siswa WHERE id_user = $id_user");
	if ($queryDeleteSiswa) {
		$queryDeleteUser = $koneksi->query("DELETE FROM tb_user WHERE id_user = $id_user");
		if ($queryDeleteUser) {
			?>
			<script>
				successAlert("Berhasil", "Delete Siswa Berhasil");
				document.addEventListener('click', function(){
					location.href = 'index.php?menu=siswa';
				});
			</script>
			<?php
		}
	}
 ?>