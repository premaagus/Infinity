<script src="js/alert.js"></script>

<?php 
	$id_user = $_SESSION['user']['id_user'];

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
			<p>Password Lama</p>
			<input type="password" name="password_lama" id="password_lama" placeholder="Input Password Lama Disini..." required>
			<div class="alert-err">
				<p>Password Lama Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control">
			<p>Password Baru</p>
			<input type="password" name="password_baru" id="password_baru" placeholder="Input Password Baru Disini..." required>
			<div class="alert-err">
				<p>Password Baru Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
		<div class="form-control">
			<p>Ulangi Password Baru</p>
			<input type="password" name="r_password" id="r_password" placeholder="Ulangi Password..." required>
			<div class="alert-err">
				<p>Ulangi password Tidak Boleh Kosong</p>
				<div class="point-err"></div>
			</div>
		</div>
	<div class="btn-add d-flex j-end">
		<button type="submit" name="btn_submit">Submit</button>
	</div>
</form>

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
		$queryUser = $koneksi->query("SELECT * FROM tb_user WHERE $id_user = $id_user");
		$dataUser = $queryUser->fetch_assoc();

		$passwordDb = $dataUser['password'];
		$password_lama = $_POST['password_lama'];
		$password_baru = $_POST['password_baru'];
		$r_password = $_POST['r_password'];


		if (password_verify($password_lama, $passwordDb)) {
			if ($password_baru == $r_password) {
				$passwordHash = password_hash($password_baru, PASSWORD_BCRYPT, ['cost' => 12]);
				$queryUpdate = $koneksi->query("UPDATE tb_user SET password = '$passwordHash' WHERE id_user = $id_user");
				if ($queryUpdate) {
					?>
					<script>
						successAlert("Sukses", "Password telah diubah");
						document.addEventListener('click', function(){
							location.href = 'index.php?menu=index';
						});
					</script>
					<?php
				}
				else{
					?>
					<script>
						errorAlert("Error", "Password gagal diubah");
					</script>
					<?php
				}
			}
			else{
				?>
				<script>
					errorAlert("Error", "Password baru tidak sama");
				</script>
				<?php
			}
		}
		else{
			?>
			<script>
				errorAlert("Error", "Password Lama Salah");
			</script>
			<?php
		}
	}
 ?>