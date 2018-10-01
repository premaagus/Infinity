<?php 
	$koneksi = @new Mysqli("localhost", "root", "", "db_vajax");

	if (!$koneksi) {
		echo "Connection Error";
	}
 ?>