<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HOME</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
	</head>
	<body>
	<style>
	body{background-image: url('<?php echo base_url()?>foto/Fotang_Delphi2017.jpg') !important;}
	body{background-position: center;}
	body{background-repeat: no-repeat;}
	body{background-size: cover;}
	</style>
	<div class ="col-lg-12 atas" style="background-color: #ffd102;" >
		<center>
			<h1 >OFFICIAL WEBSITE OF<br>DELPHI 2017</h1>
		</center>
	</div>
		
	<div class="nav">
		<div class="row navbar">
			<div class="col-lg-2 list">
				<img src="<?php echo base_url() ?>foto/delphi.png" alt="Logo Delphiku"></img>
			</div>
			<div class="col-lg-2 list">
				<a href ="index.php/controller/home"> HOME </a>
			</div>
			<div class="col-lg-2 list">
				<a href ="index.php/controller/biodelphi"> BIO DELPHI </a>
			</div>
			<div class="col-lg-2 list">
				<a href ="index.php/controller/delphinfo"> DELPHINFO </a>
			</div>
			<div class="col-lg-2 list">
				<a href ="index.php/controller/about"> ABOUT </a>
			</div>
			<div class="col-lg-2 list">
				<img src="<?php echo base_url() ?>foto/himatif.png" alt="Logo HIMATIFKu" ></img>
			</div>
		</div>
	</div>

		<?php if (isset($_SESSION['npm'])): ?>
         
          <a class="right" href="#"><?php echo " ".$_SESSION['npm']." "; ?></a>
           <a class="right" href="<?php echo base_url();?>index.php/controller/logout">Logout</a>
           <?php else: ?>
        <a class="right" href="<?php echo base_url();?>index.php/Home/user_login">Login</a>
        <a class="right" href="<?php echo base_url();?>index.php/Home/user_registration">Register</a>
      <?php endif ?>
			
          
			</div>
		
			<div class="isi">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text">
							<b><h1> ABOUT US </h1>
							<p>Delphi 2017 adalah sekumpulan mahasiswa-mahasiswi Teknik Informatika UNPAD angkatan 2017 yang terdiri dari 61 orang. Muhammad Fakhri Rahman adalah sosok yang memimpin Delphi 2017 sebagai Koordinator Angkatan dengan ditemani Mutia Karimah sebagai Wakil Koordinator Angkatan</p><br><br>
							<p> Koordinator Angkatan </p><br>
							<img src="<?php echo base_url() ?>foto/aci.jpg" alt="Foto Fakhri" style="width:100px; height:100px;"></img><br>
							<p> Wakil Koordinator Angkatan </p><br>								
							<img src="<?php echo base_url() ?>foto/mutia.jpg" alt="Foto Mutia" style="width:100px; height:100px;"></b>
						</div>
					</div>
					<div class="row bot">
						<div class="col-md-4 text1">
							<a href="artikel1.html"><img src="<?php echo base_url() ?>foto/d-effort.jpg" alt="Foto D-effort"><br>Pengabdian Delphi</a>
						</div>
						<div class="col-md-4 text1">
							<a href="artikel2.html"><img src="<?php echo base_url() ?>foto/makrab.jpg" alt="Foto Makrab"><br>Makrab 2018</a>
						</div>
						<div class="col-md-4 text1">
							<a href="artikel3.html"><img src="<?php echo base_url() ?>foto/instagram.jpg" alt="Foto Pemenang Instagram"><br>Delphi di Instagram!!</a>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>

<!-- style himatif style="float:right;margin:auto;width:100px;height:100px;