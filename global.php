<html>
	<head>
		<title>ilk </title>
	</head>
	<body>	
		<?php 
		$x=10;
		function topla($a)
		{
		global $x;
		$z=$a+$x;
		return $z;
		}
		echo topla(2);
		?>
		
</html> 	