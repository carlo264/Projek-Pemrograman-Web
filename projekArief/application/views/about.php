<!DOCTYPE html>
<html>
	<head>
		<title>ABOUT</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/about.css">
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
			<center>
			<br>
			<br>
			<h2>WEBSITE MAKER</h2>
			<div class="about">
				<img src="foto/jcarlo.jpg" alt="Foto bene" style="width:300px; height:300px;"></img>
				<img src="foto/woks.jpg" alt="Foto ewok" style="width:300px; height:300px;"></img>
				<img src="foto/dhan.jpg" alt="Foto ardan" style="width:300px; height:300px;"></img><br>
				<h2 style="color: white;" >Benedict Juan Carlo (140810170016)<h2/>
				<h2 style="color: white;" >Muhammad Hafidz Alfarizi (140810170022)<h2/>	
				<h2 style="color: white;" >Arief Ramadhan (140810170036)<h2/>	
					
			<div/>		
			</center>		
		</div>
	</body>
</html>

<!-- style himatif style="float:right;margin:auto;width:100px;height:100px;