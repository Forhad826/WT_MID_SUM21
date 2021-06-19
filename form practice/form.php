<?php 
    $name="";
	$err_name="";
	$password="";
	$err_password="";
	$address="";
	$err_address="";
	$game ="";
	$err_game="";
	$gender="";
	$err_gender="";
	$age="";
	$err_age="";
	
	$hasError=false;
	$ages= array("20","21","22");
	

if ($_SERVER["REQUEST_METHOD"]== "POST"){
	if(empty($_POST["name"])){
	$hasError=true;	
	$err_name="Name Required";}
	else if (strlen($_POST["name"]) <=2){
		$hasError = true ;
		$err_name = "name must be greater than 2 character";
	}
	else
	{
		$name=$_POST["name"];
	}
	
	if(empty($_POST["password"])){
	$hasError=true;	
	$err_password="password Required";}
	else if (strlen($_POST["password"]) <=2){
		$hasError = true ;
		$err_password = "password must be greater than 2 character";
	}
	else
	{
		$password=$_POST["password"];
	}
	
	if(empty($_POST["address"])){
	$hasError=true;	
	$err_address="address Required";}
	else
	{
		$address=$_POST["address"];
	}
	
	if(!isset($_POST["game"])){
	$hasError= true;
	$err_game="game Required";
	}
	else{
		$game =$_POST["game"];
	}
	
	
	if(!isset($_POST["gender"])){
	$hasError= true;
	$err_gender="Gender Required";
	}
	else{
		$gender =$_POST["gender"];
	}
	if(!isset($_POST["age"])){
		$hasError=true;
		$err_age="age required";
	}
	else{
	$age=$_POST["age"];
	}
	
	if(!$hasError){
	
	echo $_POST["name"]."<br>";
	echo $_POST["password"]."<br>";
	echo $_POST["address"]."<br>";
	$arr = $_POST["game"];
	foreach($arr as $A){
		echo "$A <br>";
	}
	echo $_POST["gender"]."<br>";
	echo $_POST["age"]."<br>";
	}
	
}
	
	?>

<html>

    <head>
	     <title> This is form 1</title>
	</head>
	<body>
	<form action=" " method="post">
	
		<table border="1">
		<tr>
		<td colspan="2" align="center"> <b>User From </b></td>
		</tr>
		<tr>
		<td > Enter Name  </td>
		<td ><input name="name" value="<?php echo $name ?>" type="text"  placeholder="Enter your Name"></td>
		<td><span><?php echo $err_name; ?></span></td>
		</tr>
		<tr>
		<td > Enter password  </td>
		<td ><input name="password" value="<?php echo $password ?>"type="password" placeholder="Enter your password" </td>
		
		<td><span><?php echo $err_password; ?></span></td></tr>
		<tr>
		<td > Enter Address   </td>
		<td ><textarea name="address"></textarea> <br>
		<span><?php echo $err_address; ?></span></td>
		
		</tr>
		<tr>
		<td > Select Game  </td>
		<td ><input  name="game[]" type ="checkbox" value="Hockey"  >Hockey <br>
		<input  name="game[]" type ="checkbox" value=" Football">Football <br>
		<input name="game[]" type ="checkbox" value="Badminton "  >Badminton <br>
		<input  name="game[]" type ="checkbox" value="Cricket " >Cricket <br>
		<input  name="game[]" type ="checkbox" value="volleyball  " >volleyball <br>
		</td>
		<td><span><?php echo $err_game; ?></span></td>
		</tr>
		<tr>
		<td > Gender  </td>
		<td ><input type="radio" value= "Male" <?php if($gender=="Male") echo "checked" ;?> name="gender">Male 
             <input type="radio" value="Female" <?php if($gender=="Female") echo "checked" ;?> name="gender">Female		</td>
		<td><span><?php echo $err_gender; ?></span></td>
		</tr>
		<tr>
		<td > Select Your Age</td>

		<td > <select name="age" >
		<option selected disabled > -select- </option>
		<?php
		foreach($ages as $a)
		{
			if($a == $age ){
			echo "<option selected> $a </option>";}
		else{
		echo "<option > $a </option>";
		}
		}
		?>
		
		</select>
		</td>
		<td><span><?php echo $err_age; ?></span></td>
		</tr>
		
		<tr>
		<td>
		  <button>Submit</button>
		</td>
		</tr>
		
		
		</form>
		</table>
			
	</body>
</html>