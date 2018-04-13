
<!DOCTYPE html>
<html>
<head>
	<title>perpustakan digital banten</title>
	<link rel="stylesheet" type="text/css" href="css/style_adm.css">
	<link rel="SHORTCUT ICON" href="img/logo.png">
	<meta charset="utf-8">
	<meta content="width=device-width initial-scale">
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>user</th>
				<th>kind of book</th>
				<th colspan="2">action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>andi</td>
				<td>Buku sejarah indo</td>
				<td><a href="#">edit</a></td>
				<td><a href="#">delete</a></td>
			</tr>
		</tbody>
	</table><br>
		<div method="POST" class="add" action="server.php" >
			<label name="nama" >nama</label><br>
			<input type="text" name="nama"><br>
			<label name="nama" >buku yang dipinjam</label><br>
			<input type="text" name="nama"><br><br>
			<button type="submit" name="save" class="btn">add</button>

		</div>
</body>
</html>