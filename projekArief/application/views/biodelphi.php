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
					<img src="<?php echo base_url();?>foto/delphi.png" alt="Logo Delphiku"></img>
				</div>
				<div class="col-lg-2 list">
					<a href ="home"> HOME </a>
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
					<img src="<?php echo base_url();?>foto/himatif.png" alt="Logo HIMATIFKu" ></img>
				</div>
			</div>
						
		</div>
		
		
		<div class="isi">
				<div class="container">
					<div class="row">
						<center>
							<br><h2>Biodata Delphi 2017</h2><br>
							<div class="text">
							<ol> 
							<?php foreach ($postdelphi->result() as $item) : ?>
								<li>
									<?php echo $item->nama?><br>
									<?php echo $item->npm?><br>
									<?php echo $item->jk?><br>
									<?php echo $item->agama?><br>
									<?php echo $item->tgl_lahir?><br>
									<?php echo $item->tmp_lahir?><br>
									<?php echo $item->alamat?><br>
									<?php echo $item->hp?><br>
									<?php echo $item->id_line?><br>
									<?php echo $item->bdg_minat?><br>
									<?php echo $item->pekerjaan?><br>
									<?php echo $item->tmp_kerja?><br>
									<?php echo $item->email?>

								</li>
								<br>
							<?php endforeach; ?>
							</ol>		
									
									
							</div>		
						</center>
					</div>
				</div>
			</div>		
	</body>
</html>


