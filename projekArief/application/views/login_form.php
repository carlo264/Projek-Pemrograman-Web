<?php
$this->load->library('session');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
		<link rel="stylesheet" href="<?php echo base_url()?>css/login_form.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
	</head>
	<body>
		<div class="row">
				<div class="col-lg-8 atas">
					<img class="image" src="<?php echo base_url()?>foto/delphi.png" alt="Logo Delphiku"></img>
					<img class="image" src="<?php echo base_url()?>foto/himatif.png" alt="Logo Himatifku"></img>
					<p class="textS">Ciao! Selamat Datang,<br>Delphi!</p>
				</div>				
		</div>
		<?php echo validation_errors();?>
		<?php echo form_open('controller/login_proces');?>
		<form action="controller/login_proces" method="POST">
		<div class="row">
				<div class="col-lg-6">
					<img class="fotoimg" src="<?php echo base_url()?>foto/orang_full.png" alt="Orang Sensor"></img>
				</div>
				<div class="col-lg-4 login">
					<h1>Login Here</h1>
					<div class="textbox">
						<img class="logo" src="<?php echo base_url()?>foto/user-solid.svg" alt="Logo User"></img>
						<input type="text" placeholder="NPM" name="npm" value="" required>
					</div>

					<div class="textbox">
						<img class="logo" src="<?php echo base_url()?>foto/lock-solid.svg" alt="Logo User"></img>
						<input type="password" placeholder="Password" name="password" value="" required>
					</div>
					<input type="submit" class="btn btn-success" name="login" value="LOGIN">
					<br>
					<br>
					<a href="home.html" alt="My Home"><input class="btn" type="button" name="" value="Sign in as Stranger"></a>
				</div>
		</div>
		</form>
	</body>






</html>