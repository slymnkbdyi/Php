<html>
	<head>
		<title>ilk </title>
	</head>
	<body>	
		<?php 
		for($count=0;$count<10;$count++)
		{
			if($count == 5)
			{
			continue;
			}
			else if($count == 8)
			{
			break;
			}
			echo $count."<br>";
		}
			
		?>
		
</html> 	