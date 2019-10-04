
<html>
<?php
	define("background_color", "cyan");
	define("h1color", "red");
	define("linkcolor", "red");
?>
<head>
	<title>	Ex1 </title>
</head>
<body>
	
	<?php 
		echo "<body bgcolor='" .background_color ."'/>"; 
		echo "<h1 style=' color:". h1color ."'> H1</h1>";
		echo "<a style=' color:". linkcolor ."'>Link</a>";
	?>
</body>
</html>
