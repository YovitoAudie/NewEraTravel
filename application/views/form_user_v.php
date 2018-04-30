<!DOCTYPE html>
<html>
<head>
	<title>Form Input - User</title>
</head>
<body>
	<form action="http://localhost/codeigniter/index.php/User/add" method="post">
		Username: <br>
		<input type="text" name="username"><br>
		Password: <br>
		<input type="password" name="password"><br>
		FullName: <br>
		<input type="text" name="fullname"><br>
		Level <br>
		<select name="level">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select>
		<input type="submit" value="simpan">
	</form>

</body>
</html>