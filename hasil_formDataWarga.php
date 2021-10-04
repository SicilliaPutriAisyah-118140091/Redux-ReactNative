<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil Input</title>


	


<link rel="stylesheet" type="text/css" href="style_hasilFormDataWarga.css"> 
</head>
<body>

	<h3 align="center">Hasil Input Data Warga</h3>

	<table>
		<tr>
			<th>Nama Lengkap</th>
			<th>Alamat</th>
			<th>Nomor HP</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Status</th>
			<th>Agama</th>
			<th>Status Tempat Tinggal</th>
		</tr>
		<tr>
			<td><?php echo $_GET["nama"] ?></td>
			<td><?php echo $_GET["alamat"] ?></td>
			<td><?php echo $_GET["no_telp"] ?></td>
			<td><?php echo $_GET["tmpt_lahir"] ?></td>
			<td><?php echo $_GET["tgl_lahir"] ?></td>
			<td><?php echo $_GET["gender"] ?></td>
			<td><?php echo $_GET["status"] ?></td>
			<td><?php echo $_GET["agama"] ?></td>
			<td><?php echo $_GET["status_ttl"] ?></td>
		</tr>

		
	</table>

</body>
</html>