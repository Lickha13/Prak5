<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<h2>SILAKAN MENGISI BIODATA ANDA !</h2>
<form method="POST" action="tugas3_postAct.php">
	<table rules="rows">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Masukkan Nama ..." style="width: 95%;"></td>
		</tr>
		<tr>
			<td>NPM</td>
			<td><input type="text" name="npm" placeholder="Masukkan Npm ..." style="width: 95%;"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tgllahir" style="width: 95%;"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jk" value="Laki-laki">Laki-Laki<input type="radio" name="jk" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td><select name="angkatan_mahasiswa" id="" style="width: 95%;">
				<option value="">--Pilih--</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><select name="fakultas_mahasiswa" id="" style="width: 95%;">
				<option value="">--Pilih--</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
				<option value="Fakultas Hukum">Fakultas Hukum</option>
				<option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
				<option value="Fakultas Tektik">Fakultas Tektik</option>
				<option value="Fakultas Pertanian">Fakultas Pertanian</option>
			</select></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td><select name="jurusan_mahasiswa" id="" style="width: 95%;">
				<option value="">--Pilih--</option>
				<option value="Manajemen">Manajemen</option>
				<option value="Akutansi">Akutansi</option>
				<option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
				<option value="Sistem Informasi">Sistem Informasi</option>
				<option value="Informatika">Informatika</option>
				<option value="Sains Data">Sains Data</option>
				<option value="Hukum">Hukum</option>
				<option value="Administrasi Negara">Administrasi Negara</option>
				<option value="Administrasi Bisnis">Administrasi Bisnis</option>
				<option value="Hubungan Internasional">Hubungan Internasional</option>
				<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
				<option value="Pariwisata">Pariwisata</option>
				<option value="Teknik Industri">Teknik Industri</option>
				<option value="Teknik Kimia">Teknik Kimia</option>
				<option value="Teknik Lingkungan">Teknik Lingkungan</option>
				<option value="Teknik Sipil">Teknik Sipil</option>
				<option value="Teknologi Pangan">Teknologi Pangan</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="Agribisnis">Agribisnis</option>
				<option value="Agroteknologi">Agroteknologi</option>
			</select></td>
		</tr>
		<tr>
			<td>Foto Profil</td>
			<td><input type="file" name="foto" accept="image/*"></td>
		</tr>
	</table>
	<br>
	<button type="submit" name="submit" value="submit">Kirim</button>
</form>
</body>
</html>