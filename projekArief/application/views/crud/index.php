<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php
include_once("config.php");
$query = mysqli_query($conn,"SELECT*FROM biodata");
?>
<body>
<div class="container">
	<center>
		<style>
		body{
			background-image: url("Fotang_Delphi2017.jpg");
			height:650px;
    		background-position: center;
			background-repeat: no-repeat;
    		background-size: cover;
		}
		table,th,td{
			border: 5px solid #ffd102;
		}
		table{
			width: 100%;
			border-collapse: collapse;
			text-align: center;
			color: lightblue;
			background-color: rgba(0,0,0, 0.7);
		}
		th{
			height: 50%;
		}
		</style>
<br><br><br>
<a class="right" href="<?php echo base_url();?>index.php/controller/logout">Logout</a>
<form action="" method="POST">
	<div class="table-responsive">	
	<table class="table table-hover">
		<tr>
			<th>No</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Tanggal Lahir</th>
			<th>Tempat Lahir</th>
			<th>Alamat</th>
			<th>Nomor HP</th>
			<th>ID Line</th>
			<th>Bidang Minat</th>
			<th>Pekerjaan</th>
			<th>Tempat Kerja</th>
			<th>E-mail</th>
			<th>Edit Table</th>
		</tr>
		<?php if(mysqli_num_rows($query)>0){?>
		<?php
			$no = 1;
			while($data=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $data["npm"]; ?></td>
			<td><?php echo $data["nama"]; ?></td>
			<td><?php echo $data["jk"]; ?></td>
			<td><?php echo $data["agama"]; ?></td>
			<td><?php echo $data["tgl_lahir"]; ?></td>
			<td><?php echo $data["tmp_lahir"]; ?></td>
			<td><?php echo $data["alamat"]; ?></td>
			<td><?php echo $data["hp"]; ?></td>
			<td><?php echo $data["id_line"]; ?></td>
			<td><?php echo $data["bdg_minat"]; ?></td>
			<td><?php echo $data["pekerjaan"]; ?></td>
			<td><?php echo $data["tmp_kerja"]; ?></td>
			<td><?php echo $data["email"]; ?></td>
			<td>
				<a href="<?php echo base_url ('hapus/').$data['npm']?>">Hapus</a> |
				<a href="edit.php?npm=<?php echo $data["npm"]?>">Perbarui</a>
			</td>
		</tr>
		<?php $no++; }?>
		<?php }?>
		<br><br><br>
	</table>
	<br><br><center>
	<a href="addView"><input type="button" name="" value="Tambahkan Data"></a>
</form>