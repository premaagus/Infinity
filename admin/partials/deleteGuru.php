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

	$queryDeleteGuru = $koneksi->query("DELETE FROM tb_guru WHERE id_user = $id_user");
	if ($queryDeleteGuru) {
		$queryDeleteUser = $koneksi->query("DELETE FROM tb_user WHERE id_user = $id_user");
		if ($queryDeleteUser) {
			?>
			<script>
				successAlert("Berhasil", "Delete Guru Berhasil");
				document.addEventListener('click', function(){
					location.href = 'index.php?menu=guru';
				});
			</script>
			<?php
		}
	}
 ?>