<html>
	<head>
		<title>ilk uygulama </title>
	</head>

	<body>	
		
		<?php 
			session_start(); /* oturumu baslatmaya yara */
			$_SESSION["ad"]="Ali";
			$_SESSION["soyad"]="kabadayi";
			$ad_soyad=$_SESSION["ad"]." ".$_SESSION["soyad"];
			echo $ad_soyad;
		 /* session_destroy ise oturum kapatmaya yarar*/
		?>
	
		
	</body>
</html> 	