<html>
	<head>
		<title>ilk uygulama </title>
	</head>

	<body>	
		
		<?php 
			$kullanici=htmlspecialchars($_POST["ad"]);  /* htmlspecialchars   özel karakterlerle içeri sızdırmaz*/ 
			$sifre=htmlspecialchars($_POST["sifre"]);
			echo "Hosgeldiniz  : " ,$kullanici ,"Bey" ;
			echo "<br>";
			echo "<br>";
			echo "Sifreniz : "  , $sifre ;
		?>
	
		
	</body>
</html> 	