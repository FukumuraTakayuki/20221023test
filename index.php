<body>
 
<table border="1">
 
<?php
	
	for( $i = 1 ; $i <= 9 ; $i++ ){
		echo "<tr>";
		for( $j = 1 ; $j <= 9 ; $j++ ){
			
			echo "<td style=\"text-align:right;\">";
			
			if( $i * $j < 10) echo "&nbsp;";
			echo $i * $j;
			echo "</td>";
		}
		echo "</tr>";
	}
 
?>
</table>
 
</body>