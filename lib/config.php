<?php 
	session_start();
	date_default_timezone_set("Asia/Makassar");
	$koneksi = @new Mysqli("localhost", "root", "", "db_infinity");

	if (!$koneksi) {
		echo "Connection Error";
	}
 ?>