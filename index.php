<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="icon" href="img/logo/icon.png">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
	<link rel="stylesheet" href="css/alert.css">
</head>
<body>

<!-- Alert -->
	<div id="opacity"></div>

	<div id="success-msg">
		<div class="icon-success">
			<img src="img/green-check.gif">
		</div>
		<h1 id="capt-s-alert"></h1>
		<p id="desc-s-alert"></p>
		<div class="btn-s-alert">
			Oke
		</div>
	</div>
	<div id="error-msg">
		<div class="icon-error">
			<img src="img/error.gif">
		</div>
		<h1 id="capt-e-alert"></h1>
		<p id="desc-e-alert"></p>
		<div class="btn-e-alert">
			Oke
		</div>
	</div>
<!-- Alert -->

	<div class="wrapper d-flex">
		<div class="container-left d-flex i-ctr">
			<img src="img/register-g.png">
		</div><!-- container-left -->
		<div class="container-right d-flex i-ctr">
			<form action="" method="POST" onsubmit="return false">
				<div class="container-input d-flex f-row i-ctr j-ctr">
					<div style="width: 50%;">
						<img src="img/logo/new.png">
					</div>
					<div class="form-control form-panjang">
						<input type="text" name="nama" placeholder="Username Atau Email" class="form-input" id="username">
						<span class="form-focus"></span>
						<i class="fas fa-user symbol-input"></i>
						<div id="username-alert">!</div>
					</div>
					<div class="form-control form-panjang">
						<input type="password" name="email" placeholder="Password" class="form-input" id="password">
						<span class="form-focus"></span>
						<i class="fas fa-lock symbol-input"></i>
						<div id="password-alert">!</div>
					</div>
					<div style="width: 100%;" class="d-flex j-end">
						<button type="submit" name="btn-submit" id="btn-submit">Masuk</button>
					</div>
				</div>
			</form>
		</div><!-- container-right -->
	</div><!-- wrapper -->

	<!-- Alert -->
	<script src="js/alert.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function(){
			var username = document.getElementById('username');
			var password = document.getElementById('password');
			var usernameAlert = document.getElementById('username-alert');
			var passwordAlert = document.getElementById('password-alert');
			var btn_submit = document.getElementById('btn-submit');

			btn_submit.addEventListener('click', function(){

				//Validasi Form
				if (username.value == "") {
					usernameAlert.style.opacity = '1';
					username.focus();
				}
				else{
					usernameAlert.style.opacity = '0';
					if (password.value == "") {
						passwordAlert.style.opacity = '1';
						password.focus();
					}
					else{
						passwordAlert.style.opacity = '0';
						var xhr = new XMLHttpRequest();
						var data = "username="+username.value+"&password="+password.value;
						xhr.onreadystatechange = function(){
							if (xhr.readyState == 4 && xhr.status == 200) {
								console.log(xhr.responseText);

								if (xhr.responseText == 1) {
									successAlert("Berhasil", "Selamat Datang "+username.value);
									document.addEventListener('click', function(){
										location.href = 'admin/index.php';
									});
								}
								else if (xhr.responseText == 2) {
									successAlert("Berhasil", "Selamat Datang "+username.value);
									document.addEventListener('click', function(){
										location.href = 'admin/index.php';
									});
								}
								else if (xhr.responseText == 3) {
									successAlert("Berhasil", "Selamat Datang "+username.value);
									document.addEventListener('click', function(){
										location.href = 'guru/index.php?menu=index';
									});
								}
								else if (xhr.responseText == 'gagal') {
									errorAlert("Error", "Username Atau Password Salah!");
								}
							}
						}

						xhr.open("POST", "controller/loginController.php", true);
						xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
						xhr.send(data);
					}
				}
			});

			username.addEventListener('keyup', function(){
				if (username.value == "") {
					usernameAlert.style.opacity = '1';
				}
				else{
					usernameAlert.style.opacity = '0';
				}
			});

			password.addEventListener('keyup', function(){
				if (password.value == "") {
					passwordAlert.style.opacity = '1';
				}
				else{
					passwordAlert.style.opacity = '0';
				}
			});

		});
	</script>
</body>
</html>