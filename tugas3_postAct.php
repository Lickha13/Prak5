<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
<h2>BIODATA MAHASISWA</h2>
<table border="1">
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $_POST['nama']; ?></td>
	</tr>
	<tr>
		<td>NPM</td>
		<td>:</td>
		<td><?php echo $_POST['npm']; ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $_POST['tgllahir']; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $_POST['jk']; ?></td>
	</tr>
	<tr>
		<td>Angkatan</td>
		<td>:</td>
		<td><?php echo $_POST['angkatan_mahasiswa']; ?></td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td>:</td>
		<td><?php echo $_POST['fakultas_mahasiswa']; ?></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><?php echo $_POST['jurusan_mahasiswa']; ?></td>
	</tr>
	<tr>
		<td>Foto Profil</td>
		<td>:</td>
		<td><img src="<?php echo $_POST['foto']; ?>" alt="" width="150px" height="150px"></td>
	</tr>
</table>
</body>
</html>