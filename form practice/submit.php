<html>

    
	<body>
	Form Submitted<br>
	<?php 
	echo $_POST["name"]."<br>";
	echo $_POST["password"]."<br>";
	echo $_POST["address"]."<br>";
	$arr = $_POST["game"];
	foreach($arr as $A){
		echo "$A <br>";
	}
	echo $_POST["gender"]."<br>";
	echo $_POST["age"]."<br>";
	
	
	
	?>
			
	</body>
</html>