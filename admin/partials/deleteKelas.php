<script src="js/alert.js"></script>
<?php 
	$id_kelas = $_GET['id_kelas'];

	$queryDelete = $koneksi->query("DELETE FROM tb_kelas WHERE id_kelas = $id_kelas");

	if ($queryDelete) {
		?>
		<script>
			successAlert("Berhasil", "Delete Kelas Berhasil");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=kelas';
			});
		</script>
		<?php
	}
 ?>