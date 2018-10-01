<?php require_once '../lib/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="icon" href="../img/logo/icon.png">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="../css/fontawesome.css">
</head>
<body>

	<div class="wrapper d-flex">
		
		<div class="navbar d-flex j-end">
			<ul>
				<li><a href="#">Siswa</a></li>
				<li><a href="#">Guru</a></li>
				<li><a href="#">Mata Pelajaran</a></li>
				<li class="btn-logout"><a href="#">Logout</a></li>
			</ul>
		</div>

		<div class="container-side f-row">
			<div class="profile-user">
				<div class="logo">
					<img src="../img/logo-branding-white.png">
				</div>
				<div class="picture-user">
					<img src="images/profile/profile1.jpg">
				</div>
				<h2>Prema Agus</h2>
				<p>17 - premaagus@gmail.com</p>
			</div>

			<div class="menu d-flex f-col j-ctr">
				<div class="container-menulist">
					<div class="menu-list">
						<a href="index.php" class="<?php if(!isset($_GET['menu'])){echo 'active';} ?>">
							<i class="far fa-chart-bar"></i>
							<h4>Dashboard</h4>
						</a>
					</div>
					<div class="menu-list">
						<a href="index.php?menu=siswa" class="<?php if($_GET['menu'] == 'siswa'){echo 'active';} ?>">
							<i class="fas fa-graduation-cap"></i>
							<h4>Siswa</h4>
						</a>
					</div>
				</div>
				<div class="container-menulist">
					<div class="menu-list">
						<a href="index.php?menu=guru" class="<?php if($_GET['menu'] == 'guru'){echo 'active';} ?>">
							<i class="fas fa-chalkboard-teacher"></i>
							<h4>Guru</h4>
						</a>
					</div>
					<div class="menu-list">
						<a href="index.php?menu=mapel" class="<?php if($_GET['menu'] == 'mapel'){echo 'active';} ?>">
							<i class="fas fa-book"></i>
							<h4>Mata Pelajaran</h4>
						</a>
					</div><!-- menu-list -->
				</div><!-- container-menulist -->
			</div><!-- menu -->
			<div class="footer-sidebar d-flex fd-col j-str i-ctr">
				<ul>
					<li><a href="#">Beranda</a></li>
					<li><a href="#">Tentang</a></li>
					<li><a href="#">Kontak</a></li>
				</ul>
				<br>
				<h5>&copy; AcademyLab 2018</h5>
			</div><!-- footer-sidebar -->
		</div>
		<div class="container-data">
		<?php 
			require_once 'main.php';
		 ?>
		</div>

	</div>

</body>
</html>