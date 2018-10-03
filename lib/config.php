<?php 
	session_start();
	$koneksi = @new Mysqli("localhost", "root", "", "db_infinity");

	if (!$koneksi) {
		echo "Connection Error";
	}
 ?>