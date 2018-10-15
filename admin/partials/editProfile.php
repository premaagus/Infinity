<script src="js/alert.js"></script>

<?php 
	$id_user = $_SESSION['user']['id_user'];

	$queryUser = $koneksi->query("SELECT * FROM tb_user WHERE id_user = $id_user");
	$dataUser = $queryUser->fetch_assoc();

	if ($_GET['id_user'] != $id_user) {
		?>
		<script>
			errorAlert("Error", "Akses Ditolak");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=index';
			})
		</script>
		<?php
	}
 ?>

<h1>Ubah Password</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="container1 d-flex f-row">
		<div class="form-control-block">
			<p>Foto Profil Lama</p>
			<img src="../img/profile/<?php echo $dataUser['profile_img'] ?>">
		</div>

		<div class="form-control-block">
			<p>Foto Profil Baru</p>
			<input type="file" name="profile_img" id="profile_img">
			<div class="alert-err">
				<p>Foto Profil Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
	</div>
	<div class="btn-add d-flex j-end">
		<button type="submit" name="btn_submit">Submit</button>
	</div>

</form>
<script src="js/alert.js"></script>

<script>
	var input = document.querySelectorAll('input');
	for (var i = 0; i < input.length; i++){
		input[i].addEventListener('keyup', function(){
			if (this.value == "") {
				this.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '1';
			}
			else{
				this.parentNode.querySelectorAll('.alert-err')[0].style.opacity = '0';
			}
		});

	}
</script>

<?php 
	if (isset($_POST['btn_submit'])) {
		$profile_img_name = $_FILES['profile_img']['name'];
		$tmp_profile = $_FILES['profile_img']['tmp_name'];

		function upload(){
			//cek gambar
			$profile_img_name 	= $_FILES['profile_img']['name'];
			$tmp_profile 		= $_FILES['profile_img']['tmp_name'];
			$extensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
			$extensiGambar = explode('.', $profile_img_name);
			$extensiGambar = strtolower(end($extensiGambar));
			if (!in_array($extensiGambar, $extensiGambarValid)) {
				?>
				<script>
					errorAlert("Error", "Yang Anda Upload Bukan Gambar");
				</script>
				<?php
				die();
			}

			//Verified image
			$namaBaru = uniqid();
			return $namaBaru .= ".".$extensiGambar;
		}

		if ($_FILES['profile_img']['error'] == 4) {
			$namaBaru = $dataUser['profile_img'];
		}
		else{
			upload();
			$namaBaru = upload();
			move_uploaded_file($tmp_profile, "../img/profile/$namaBaru");
			$gambar = $dataUser['profile_img'];
			$directory = "../img/profile/";
			
			if ($gambar != 'profile.png') {
				if (file_exists($directory.$gambar)) {
					unlink($directory.$gambar);
				}
			}
		}
		$queryUpdateUser = $koneksi->query("UPDATE tb_user SET profile_img = '$namaBaru' WHERE id_user = $id_user");

		if ($queryUpdateUser) {
			?>
			<script>
				successAlert("Berhasil", "Profile telah diubah");
				document.addEventListener('click', function(){
					location.href = 'index.php?menu=index';
				});
			</script>
			<?php
		}
		else{
			?>
			<script>
				errorAlert("Error", "Profile Gagal diubah");
			</script>
			<?php
		}
	}
 ?>
