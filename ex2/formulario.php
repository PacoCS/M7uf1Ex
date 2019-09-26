<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<h2>Formulario</h2>
	<form action="data.php" method="get">
		<p><input type="text" name="firstname" placeholder="First Name"></p>
		<p><input type="text" name="secondname" placeholder="Second Name"></p>
		<p>Seleciona tu genero:</p>
		<input type="radio" name="gender" value="male"> Male	<input type="radio" name="gender" value="female"> Female
		<input type="radio" name="gender" value="other"> Other
		<p><input type="text" name="email" placeholder="Email"></p>
		<p><input type="submit" name="submit"></p>
	</form>

</body>
</html>