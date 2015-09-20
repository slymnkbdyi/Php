<html>
	<head>
		<title>ilk </title>
	</head>
	<body>	
		<?php 
		$array1=array(1,2,3,4,5);
		echo "Kac  eleman oldugu sayisi :".count($array1)."<br>";
		echo "en buyuk eleman :".max($array1)."<br>";
		echo "en kucuk eleman :".min($array1)."<br>";
		sort($array1);
		print_r($array1);
		echo "<br>";
		
		rsort($array1);
		print_r($array1);
		
		
		echo "<br>";
		echo in_array(4,$array1);
		echo "<br>";
		echo in_array(7,$array1);
		
		?> 
		
	</body>

</html> 	