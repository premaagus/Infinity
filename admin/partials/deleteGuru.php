<script src="js/alert.js"></script>

<?php 
	$id_user = $_GET['id_user'];

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