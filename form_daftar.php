<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
</head>
<body>
	<table align="center" border="1">
		<form action="proses_daftar.php" method="POST">
			<tr>
				<th>Nama</th>
				<td><input type="text" name="nama" id="nama" maxlength="35"></td>
			</tr>
			<tr>
				<th>Nim</th>
				<td><input type="text" name="nim" id="nim" maxlength="10"></td>
			</tr>
			<tr>
				<th>Kelas</th>
				<td><input type="radio" name="kelas" value="d3mi4101"> D3MI 41 01<br>
				<input type="radio" name="kelas" value="d3mi4102"> D3MI 41 02<br>
				<input type="radio" name="kelas" value="d3mi4103"> D3MI 41 03
				</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki - Laki<br>
				<input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</td>
			</tr>
			<tr>
				<th>Hobi</th>
				<td><input type="checkbox" name="hobi" value="membaca"> Membaca<br>
				<input type="checkbox" name="hobi" value="menulis"> Menulis<br>
				<input type="checkbox" name="hobi" value="bermain_musik"> Bermain Musik<br>
				<input type="checkbox" name="hobi" value="olahraga"> Olahraga<br></td>
			</tr>
			<tr>
				<th>Fakultas</th>
				<td><select name="fakultas" id="fakultas">
  						<option value="fit">FIT</option>
  						<option value="fri">FRI</option>
  						<option value="fik">FIK</option>
  						<option value="fkeb">FKEB</option>
  						<option value="fte">FTE</option>
					</select></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td><textarea rows="10" cols="40" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>
