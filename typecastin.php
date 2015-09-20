<html>
	<head>
		<title>ilk </title>
	</head>
	<body>	
		<?php 
		$var1="2";
		$var1 +=3;
		echo $var1."<br>";
		$var2="1abc";    /* stringin icindekini toplama da sadece sayıyı alır */
		$var3=$var2 + 3;
		echo $var3."<br>";
		echo gettype($var1)."<br>";  /* tipini ögrenmeye yarar */
		echo gettype($var2)."<br>";
		echo gettype($var3)."<br>";
		settype($var3,"string");   /*   degisken tipini degistirir*/
		echo gettype($var3)."<br>";
		echo is_array($var3)."<br>";    /* dizimi degilmi ? */
		echo is_integer($var1)."<br>";   /* 
		?> 
		
	</body>

</html> 	