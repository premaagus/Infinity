<script src="js/alert.js"></script>

<?php 
	
	$id = $_GET['id'];
	$queryDelete = $koneksi->query("DELETE FROM tb_mapel WHERE id_mapel = $id");

	if ($queryDelete) {
		?>
		<script>
			successAlert("Berhasil", "Data telah dihapus");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=mapel';
			});
		</script>
		<?php
	}
	else{
		?>
		<script>
			errorAlert("Gagal", "Data gagal dihapus");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=mapel';
			});
		</script>
		<?php
	}

 ?>