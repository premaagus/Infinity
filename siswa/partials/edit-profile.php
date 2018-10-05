<!DOCTYPE html>
<html>
<head>
	<title>Profile - User</title>
	<link rel="icon" href="../../img/logo/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/edit-profile.css">
	<link rel="stylesheet" href="../../css/fontawesome.css">
</head>
<body>
	<div class="wrapper d-flex f-col fd-col">
		<div class="bth d-flex f-row fd-row">
			<a href="show-profile.php">
				<i class="fas fa-arrow-alt-circle-left"></i>
				<h4>Kembali</h4>
			</a>
		</div><!-- bth -->
		<div class="container-profile d-flex fd-col f-col i-ctr">
			<form>
				<div class="img-profile">
					<img src="../images/profile/agnez.png">
				</div><!-- img-profile -->
				<div class="input-file d-flex j-ctr">
					<input type="file" name="">
				</div>
				<div class="profile edit d-flex f-col j-btw">
					<hr>
					<div class="d-flex f-row">
						<h2>Nama</h2>
						<input type="text" name="" value="Agnez Monica">
					</div>
					<div class="d-flex f-row">
						<h2>E-mail</h2>
						<input type="email" name="" value="agnezmo04@gmail.com">
					</div>
					<div class="d-flex f-row">
						<h2>Telepon</h2>
						<input type="number" name="" value="081 339 760 178">
					</div>
					<div class="d-flex f-row">
						<h2>Tanggal Lahir</h2>
						<input type="date" name="" value="14 / 04 / 2001">
					</div>
					<div class="d-flex f-row">
						<h2>Facebook</h2>
						<input type="text" name="" value="Agnez Monica">
					</div>
					<div class="d-flex f-row">
						<h2>Instagram</h2>
						<input type="text" name="" value="agnezmo">
					</div>
					<div class="d-flex f-row">
						<h2>Twitter</h2>
						<input type="text" name="" value="agnezmo_">
					</div>
				</div><!-- profile -->
				<div class="ubah d-flex j-ctr">
					<a href="edit-profile.php">Ubah Profil</a>
				</div>
			</form>
		</div><!-- container-profile -->
	</div><!-- wrapper -->
</body>
</html>