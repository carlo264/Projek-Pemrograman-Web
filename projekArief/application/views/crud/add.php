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
    <form action="<?php echo base_url('index.php/controller/insert'); ?>" method="post" name="tambah">
        <table>
            <tr> 
                <td>NPM</td>
                <td><input type="text" name="npm" required></td>
            </tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" ></td>
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
				<td><input type="date" name="tanggallahir" ></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempatlahir" ></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" ></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" name="hp" ></td>
			</tr>
			<tr>
				<td>ID Line</td>
				<td><input type="text" name="idline" ></td>
			</tr>
			<tr>
				<td>Bidang Minat</td>
				<td><input type="text" name="bidangminat"  ></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" ></td>
			</tr>
			<tr>
				<td>Tempat Kerja</td>
				<td><input type="text" name="tempatkerja" ></td>
			</tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" ></td>
	            </tr>
        </center>
        </table>
        	<br><br>
			<input type="submit" name="Submit" value="Tambahkan">
	</form>
</body>
</html>