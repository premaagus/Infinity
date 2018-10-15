<?php 

	require_once '../lib/config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="icon" href="../img/logo/icon.png">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="../css/fontawesome.css">
	<link rel="stylesheet" href="../css/alert.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		
		<div class="navbar  d-flex j-end">
			<ul>
				<li><a href="index.php?menu=showAllSiswa">Siswa</a></li>
				<li><a href="index.php?menu=showAllGuru">Guru</a></li>
				<li><a href="#">Mata Pelajaran</a></li>
				<li class="btn-logout"><a href="logout.php">LogOut</a></li>
			</ul>
			<div class=" menu-mobile d-flex j-btw">
				<img src="../img/logo-branding-white.png">
				<div class="wrapper-menu">
			      <div class="line-menu half start"></div>
			      <div class="line-menu"></div>
			      <div class="line-menu half end"></div>
		   		</div>
		   	</div>
		</div>

		<div class="container-side f-row">
			<div class="profile-user">
				<div class="logo">
					<a href="../homepage.php"><img src="../img/logo-branding-white.png"></a>
				</div>
				<div class="picture-user">
					<img src="../img/profile/<?php echo $_SESSION['user']['profile_img'] ?>">
				</div>
				<h2><?php echo @$_SESSION['user']['profile_name'] ?></h2>
				<p>Admin - <?php echo @$_SESSION['user']['email'] ?></p>
				<div class="pref">
					<a href="index.php?menu=edit">
						<i class="fas fa-cog"></i>
					</a>
				</div>
			</div>

			<div class="menu d-flex f-col j-ctr">
				<div class="container-menulist">
					<div class="menu-list">
						<a href="index.php" class="<?php if(!isset($_GET['menu']) || $_GET['menu'] == 'index'){echo 'active';} ?>">
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
				<div class="container-menulist">
					<div class="menu-list">
						<a href="index.php?menu=kelas" class="<?php if($_GET['menu'] == 'kelas'){echo 'active';} ?>">
							<i class="fas fa-door-open"></i>
							<h4>Kelas</h4>
						</a>
					</div>
					<div class="menu-list">
						<a href="index.php?menu=jadwal" class="<?php if($_GET['menu'] == 'jadwal'){echo 'active';} ?>">
							<i class="fas fa-tasks"></i>
							<h4>Jadwal</h4>
						</a>
					</div>
				</div><!-- container-menulist -->
			</div><!-- menu -->
			<div class="footer-sidebar d-flex fd-col j-str i-ctr">
				<ul>
					<li><a href="../homepage.php">Beranda</a></li>
					<li><a href="../homepage.php">Tentang</a></li>
					<li><a href="../homepage.php">Fitur</a></li>
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