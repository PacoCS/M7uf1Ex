<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/">
	<?php	
	$directory = 'css/';
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));
	?>
	<title>HomePage</title>
</head>
<body>
	<h1>Selecciona el aspecto de la pagina</h1>
	

	<select id="skinselector">
		<?php
		foreach($scanned_directory as $cc => $name) {
    	echo '<option>'.$name.'</option>';}
    	?>
	</select>
	<p> <button type="Submit" oncl>Submit</button></p>
	<?php 
	
	 ?>
</body>
</html>