<html>
<head>
    <title>Add Users</title>
</head>

<body>
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
		width: 25%;
		border-collapse: collapse;
		text-align: center;
		color:lightblue;
		background-color: rgba(0,0,0, 0.7)
	}
	th{
		height: 50%;
	}
	</style>
	<br><br><br>
    <form action="add.php" method="post" name="tambah">
        <table>
            <tr> 
                <td>NPM</td>
                <td><input type="text" name="npm" required></td>
            </tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>
					<select name="agama">
						<option value="Islam">Islam</option>
						<option value="Kristen Katolik">Kristen Katolik</option>
						<option value="Kristen Protestan">Kristen Protestan</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddha">Buddha</option>
						<option value="Kong Hu Cu">Kong Hu Cu</option>
					</select>	
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggallahir" required></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempatlahir" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" name="hp" required></td>
			</tr>
			<tr>
				<td>ID Line</td>
				<td><input type="text" name="idline" required></td>
			</tr>
			<tr>
				<td>Bidang Minat</td>
				<td><input type="text" name="bidangminat"  required></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" required></td>
			</tr>
			<tr>
				<td>Tempat Kerja</td>
				<td><input type="text" name="tempatkerja" required></td>
			</tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" required></td>
	            </tr>
        </center>
        </table>
        	<br><br>
            <input type="submit" name="Submit" value="Tambahkan">
    </form>
	
    <?php
	
    if(isset($_POST['Submit'])) {
		include "config.php";
		$npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
		$tgl_lahir = $_POST['tanggallahir'];
		$tmp_lahir = $_POST['tempatlahir'];
		$alamat = $_POST['alamat'];
		$hp = $_POST['hp'];
		$id_line = $_POST['idline'];
		$bdg_minat = $_POST['bidangminat'];
		$pekerjaan = $_POST['pekerjaan'];
		$tmp_kerja = $_POST['tempatkerja'];
        $email = $_POST['email'];
		
		$query = mysqli_query($conn,"INSERT INTO biodata values('$npm','$nama','$jk','$agama','$tgl_lahir','$tmp_lahir','$alamat','$hp','$id_line','$bdg_minat','$pekerjaan','$tmp_kerja','$email')");
		echo "Data Berhasil Ditambahkan <a href='index.php'>Lihat Data</a>";
	}
    ?>
</body>
</html>