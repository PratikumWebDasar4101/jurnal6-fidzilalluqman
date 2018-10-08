<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<table align="center" border="1">
		<form action="proses_login.php" method="post">
			<tr>
				<th>Username</th>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="login" value="login"></td>
			</tr>
		</form>
	</table>
</body>
</html>