<?php 

	require_once '../lib/config.php';

	$tanggalLahir = $_SESSION['user']['tanggalLahir'];
	$umur = date_diff(date_create("$tanggalLahir"), date_create('today'))->y;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="icon" href="../img/logo/icon.png">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="../css/fontawesome.css">
	<link rel="stylesheet" href="../css/alert.css">
</head>
<body>

<!-- Alert -->
	<div id="opacity"></div>

	<div id="success-msg">
		<div class="icon-success">
			<img src="../img/green-check.gif">
		</div>
		<h1 id="capt-s-alert"></h1>
		<p id="desc-s-alert"></p>
		<div class="btn-s-alert">
			Oke
		</div>
	</div>
	<div id="error-msg">
		<div class="icon-error">
			<img src="../img/error.gif">
		</div>
		<h1 id="capt-e-alert"></h1>
		<p id="desc-e-alert"></p>
		<div class="btn-e-alert">
			Oke
		</div>
	</div>
<!-- Alert -->

	<div class="wrapper d-flex">
		
		<div class="navbar d-flex j-end">
			<ul>
				<li><a href="#">Siswa</a></li>
				<li><a href="#">Guru</a></li>
				<li><a href="#">Mata Pelajaran</a></li>
				<li class="btn-logout"><a href="logout.php">Logout</a></li>
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
				<h2><?= $_SESSION['user']['username'] ?></h2>
				<p><?= $umur ?> - <?= $_SESSION['user']['email'] ?></p>
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
						<a href="index.php?menu=mapel" class="<?php if($_GET['menu'] == 'mapel'){echo 'active';} ?>">
							<i class="fas fa-graduation-cap"></i>
							<h4>Mata Pelajaran</h4>
						</a>
					</div>
				</div>
				<div class="container-menulist">
					<div class="menu-list">
						<a href="index.php?menu=tugas" class="<?php if($_GET['menu'] == 'tugas'){echo 'active';} ?>">
							<i class="fas fa-chalkboard-teacher"></i>
							<h4>Tugas</h4>
						</a>
					</div>
					<div class="menu-list">
						<a href="index.php?menu=pengumuman" class="<?php if($_GET['menu'] == 'pengumuman'){echo 'active';} ?>">
							<i class="fas fa-book"></i>
							<h4>Pengumuman</h4>
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

<script src="js/alert.js"></script>

<!-- Validasi User Session -->
<script>
	<?php 
		if (!isset($_SESSION['user'])) {
			?>
			errorAlert('Error', 'Anda Tidak Memiliki Akses!');
			document.addEventListener('click', function(){
				location.href = '../index.php';
			});
			<?php
		}
		else if ($_SESSION['user']['level'] != 1) {
			?>
			errorAlert('Error', 'Anda Tidak Memiliki Akses!');
			document.addEventListener('click', function(){
				location.href = '../index.php';
			});
			<?php
		}
	 ?>
</script>
</body>
</html>