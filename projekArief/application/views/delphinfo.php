<!DOCTYPE html>
<html>
	<head>
		<title>DELPHINFO</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/delphinfo.css">
	</head>
	<body>
		<div>
			<center>
			<div>
				<h1 style="background-color: #ffd102;">OFFICIAL WEBSITE OF<br>DELPHI 2017</h1>
			</center>
			</div>
			<div class="nav">
			<ul>
				<li><img src="<?php echo base_url();?>foto/delphi.png" alt="Logo Delphiku"></img></li>
				<li><a href ="<?php echo base_url();?>index.php/controller/home"> HOME </a></li>
				<li><a href ="<?php echo base_url();?>index.php/controller/biodelphi"> BIO DELPHI </a></li>
				<li><a href ="<?php echo base_url();?>index.php/controller/delphinfo"> DELPHINFO </a></li>
				<li><a href ="<?php echo base_url();?>index.php/controller/about"> ABOUT </a></li>
				<li><?php if (isset($_SESSION['npm'])): ?>
         
          <a class="right" href="#"><?php echo " ".$_SESSION['npm']." "; ?></a>
           <a class="right" href="<?php echo base_url();?>index.php/controller/logout">Logout</a>
           <?php else: ?>
        <a class="right" href="<?php echo base_url();?>index.php/Home/user_login">Login</a>
        <a class="right" href="<?php echo base_url();?>index.php/Home/user_registration">Register</a>
      <?php endif ?></li>
				<li><img src="<?php echo base_url();?>foto/himatif.png" alt="Logo HIMATIFKu" ></img></li>
			</ul>
			</div>
		</div>
		<div class="isi">
			<br><center><h2>Berita Delphi</h2></center><br>
			<div class="info">
				<div class="grid-container">
					<div class="grid-item">1</div>
					<div class="grid-item">2</div>
					<div class="grid-item">3</div>  
					<div class="grid-item">4</div>
					<div class="grid-item">5</div>
					<div class="grid-item">6</div>  
					<div class="grid-item">7</div>
					<div class="grid-item">8</div> 
				</div>
			</div>
		</div>
	</body>
</html>

<!-- style himatif style="float:right;margin:auto;width:100px;height:100px;