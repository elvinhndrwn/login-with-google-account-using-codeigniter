<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>
	<?php $user_data = $this->session->userdata('user_data'); ?>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">

			<!-- Jika belum login -->
			<?php if(!isset($user_data["email_address"])){ ?>
				<h1 class="display-4 mb-4">Anda belum login!</h1>
				<div class="alert alert-danger" role="alert">
					Silahkan klik tombol login dibawah ini!
				</div>
				<a href="<?= base_url('google_login/login') ?>" class="btn btn-primary btn-sm float-right">Login</a>

				<!-- Jika Sudah Login -->
			<?php }else{ ?>
				<h1 class="display-4 mb-4">Login Berhasil!</h1>
				<div class="alert alert-success" role="alert">
					Selamat datang dihalaman Dashboard!
				</div>
				<table class="table">
					<tr>
						<td>Nama Depan</td>
						<td>:</td>
						<td><?= $user_data["first_name"] ?></td>
					</tr>
					<tr>
						<td>Nama Belakang</td>
						<td>:</td>
						<td><?= $user_data["last_name"] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?= $user_data["email_address"] ?></td>
					</tr>
					<tr>
						<td>Foto Profil</td>
						<td>:</td>
						<td><img src="<?= $user_data["profile_picture"] ?>"></td>
					</tr>
				</table>
				<a href="<?= base_url('google_login/logout') ?>" class="btn btn-danger btn-sm float-right">Logout</a>
			<?php } ?>
			<p class="text-center fixed-bottom">Elvin Dwi Hendrawan</p>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript">
		console.log('Elvin Dwi Hendrawan');
	</script>
</body>
</html>