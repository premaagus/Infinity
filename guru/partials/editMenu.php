<?php 
	$id_user = $_SESSION['user']['id_user'];
	
	$queryUser = $koneksi->query("SELECT * FROM tb_user WHERE id_user = $id_user");
	$dataUser = $queryUser->fetch_assoc();
 ?>

<h1>Profile</h1>
<hr>
<div class="container-detailSiswa">
	<div class="detailBackground"></div><!-- detailBackground -->
	<div class="detailFoto">
		<img src="../img/profile/<?php echo $dataUser['profile_img'] ?>">
	</div><!-- detailFoto -->
	<h3><?php echo $dataUser['profile_name'] ?></h3>
	<div class="button-detail d-flex j-ctr">
		<a href="index.php?menu=editProfile&id_user=<?php echo $id_user ?>" class="edit-profil">Ubah Profil</a>
		<a href="index.php?menu=editPassword&id_user=<?php echo $id_user ?>" class="edit-password">Ubah Password</a>
	</div><!-- button-detail -->
</div><!-- container-detailSiswa -->