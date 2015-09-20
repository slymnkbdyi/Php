<html>
	<head>
		<title>ilk </title>
	</head>
	<body>	
		<?php 
		$var1="kayseri";   
		$var2="develi";
		echo "<br>".isset($var1);  /* varmı yok mu kontrolu varsa 1 yoksa boş döner */
		echo "<br>".isset($var3);/* varmı yok mu kontrolu varsa 1 yoksa boş döner */
		unset($var1);
		echo "<br>".isset($var1);  /* varolan degiskeni sil */
		echo "<br>".isset($var2); 
		echo "<br>".empty($var1); /* boşsa 1 degilse 0 döner*/
		
		

		?> 
		
	</body>

</html> 	