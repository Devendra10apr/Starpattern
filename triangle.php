</!DOCTYPE html>
<html>
<head>
<body><center>
<?php
	// trianle shape

	for($i=1; $i<=6; $i++){

		for($j=1; $j<=11; $j++)

		{
			if($j>=7-$i && $j<=5+$i) {
				echo "<font size='6px;'>*</font>";
			}
			else{
				echo "<font size='4px;'>2</font>	"  ;
			}
		}
	 echo "<br>";
	}	

	echo "<hr>"; 

for($i=1; $i<=6; $i++){

		for($j=1; $j<=11; $j++)

		{
			if($j>=$i && $j<=12-$i) {
				echo "<font size='6px;'>*</font>";
			}
			else{
				echo "<font size='4px;'>2</font>	"  ;
			}
		}
	 echo "<br>";
	}

?>
</center>

</body>
</html>