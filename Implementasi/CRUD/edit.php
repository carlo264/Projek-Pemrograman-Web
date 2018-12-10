<?php 
	include "config.php";
	if(isset($_POST['update']))
	{
	$npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
	$tgl_lahir = $_POST['tanggallahir'];
	$tmp_lahir = $_POST['tempatlahir'];
	$alamat = $_POST['alamat'];
	$hp = $_POST['nohp'];
	$id_line = $_POST['idline'];
	$bdg_minat = $_POST['bidangminat'];
	$pekerjaan = $_POST['pekerjaan'];
	$tmp_kerja = $_POST['tempatkerja'];
    $email = $_POST['email'];

	$query = mysqli_query($conn,"UPDATE biodata SET npm='$npm',nama='$nama',jk='$jk',agama='$agama',tgl_lahir='$tgl_lahir',tmp_lahir='$tmp_lahir',alamat='$alamat',hp='$hp',id_line='$id_line',bdg_minat='$bdg_minat',pekerjaan='$pekerjaan',tmp_kerja='$tmp_kerja',email='$email' where npm='$npm'");
	if($query){
		header("Location: index.php");
	}else{
		die("ERROR!");
	}
	}
?>
<?php 
	// $nim = isset($_GET['nim']) ? $_GET['nim'] : '';
	$npm = $_GET['npm'];
	$query = mysqli_query($conn,"SELECT * FROM biodata WHERE npm=$npm");

	while($data = mysqli_fetch_assoc($query))
	{
		$npm = $data['npm'];
   	 	$nama = $data['nama'];
    	$jk = $data['jk'];
    	$agama = $data['agama'];
		$tgl_lahir = $data['tgl_lahir'];
		$tmp_lahir = $data['tmp_lahir'];
		$alamat = $data['alamat'];
		$hp = $data['hp'];
		$id_line = $data['id_line'];
		$bdg_minat = $data['bdg_minat'];
		$pekerjaan = $data['pekerjaan'];
		$tmp_kerja = $data['tmp_kerja'];
    	$email = $data['email'];
	}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Perbarui Data</title>
</head>

<body style="background-color:black">
	<center>
	<style>
	table,th,td{
		border: 5px solid lightblue;
	}
	table{
		width: 25%;
		border-collapse: collapse;
		text-align: center;
	}
	th{
		height: 50%;
	}
	</style>
	<br><br><br>
    <form action="edit.php" method="POST" name="tambah">
        <div class="table-responsive">
        <table class="table table-hover">
            <tr> 
                <td>NPM</td>
                <td><input type="text" name="npm" value="<?php echo $npm?>" ></td>
            </tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama?>" ></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option value="L" <?php if(strpos($jk,"P")>=0){ echo" selected";} ?>>Pria</option>
						<option value="P" <?php if(strpos($jk,"W")>=0){ echo" selected";} ?>>Wanita</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>
					<select name="agama">
						<option value="Islam" <?php if(strpos($agama,"Islam")>=0){ echo "selected";} ?>>Islam</option>
						<option value="Kristen Katolik" <?php if(strpos($agama,"Kristen Katolik")>=0){ echo "selected";} ?>>Kristen Katolik</option>
						<option value="Kristen Protestan" <?php if(strpos($agama,"Kristen Protestan")>=0){ echo" selected";} ?>>Kristen Protestan</option>
						<option value="Hindu" <?php if(strpos($agama,"Hindu")>=0){ echo" selected";} ?>>Hindu</option>
						<option value="Buddha" <?php if(strpos($agama,"Buddha")>=0){ echo" selected";} ?>>Buddha</option>
						<option value="Kong Hu Cu" <?php if(strpos($agama,"Kong Hu Cu")>=0){ echo" selected";} ?>>Kong Hu Cu</option>
					</select>	
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggallahir" value="<?php echo $tgl_lahir?>" ></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempatlahir" value="<?php echo $tmp_lahir?>" ></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat?>" ></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" name="HP" value="<?php echo $hp?>" ></td>
			</tr>
			<tr>
				<td>ID Line</td>
				<td><input type="text" name="idline" value="<?php echo $id_line?>" ></td>
			</tr>
			<tr>
				<td>Bidang Minat</td>
				<td><input type="text" name="bidangminat" value="<?php echo $bdg_minat?>" ></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan?>" ></td>
			</tr>
			<tr>
				<td>Tempat Kerja</td>
				<td><input type="text" name="tempatkerja" value="<?php echo $hobby?>" ></td>
			</tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="update" value="Perbarui"></td>
            </tr>
        </table>
    </form>
</body>
</html>