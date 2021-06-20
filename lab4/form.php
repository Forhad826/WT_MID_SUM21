<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirmPass="";
	$err_confirmPass="";
	$email="";
	$err_email="";
	$code="";
	$err_code="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$city="";
	$err_city="";
	$street="";
	$err_street="";
	$zip="";
	$err_zip="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$abouts=[];
	$err_about="";
	$bio="";
	$err_bio="";
	
	$d= array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16",
	"17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
	$m=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$y=array("2001","2000","1999","1998","1997","1996","1995","1994","1993","1992","1991");
	
	
	$hasError=false;
	function aboutExist($h){
		global $abouts;
		foreach($abouts as $about){
			if ($h == $about) 
				return true;
		}
		return false;
	}
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		else
		{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="User Name Required";
		}
		elseif (strlen($_POST["uname"]) <=6){
			$hasError = true;
			$err_uname = "Name must be greater than 6 characters";
		}
		elseif ( strpos(($_POST["uname"])," " )!== false){
			$hasError = true;
			$err_uname = "No space required";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		
		
		if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="password Required";
		}
		elseif (strlen($_POST["pass"]) <=8){
			$hasError = true;
			$err_pass = "Password must be greater than 8 characters";
		}
		elseif ( strpos(($_POST["pass"]),"#" )== false){
			$hasError = true;
			$err_pass = "#  required in password";
		}
		else
		{
			$pass = $_POST["pass"];
		}
		
		
		if(empty($_POST["confirmPass"])){
			$hasError=true;
			$err_confirmPass="Confirm password Required";
		}
		else
		{
			$confirmPass = $_POST["confirmPass"];
		}
		
		
		if(empty($_POST["email"])){
			$hasError=true;
			$err_email="Email Required";
		}
		elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
             $hasError=true;
			$err_email ="invalid email";
    }
       else
		{
			$email = $_POST["email"];
		}
		
		if(empty($_POST["code"])){
			$hasError=true;
			$err_code="code number Required";
		}
		else
		{
			$code = $_POST["code"];
		}
		
		
		
		if(empty($_POST["phone"])){
			$hasError=true;
			$err_phone="Phone number Required";
		}
		elseif (!is_numeric($_POST["phone"])){
			$hasError = true;
			$err_phone = "Number must be numeric";
		}
		else
		{
			$phone = $_POST["phone"];
		}
		
		
		if(empty($_POST["address"])){
			$hasError=true;
			$err_address="Address Required/something empty";
		}
		else
		{
			$address= $_POST["address"];
		}
		if(empty($_POST["city"])){
			$hasError=true;
			$err_address="Address Required/something empty";
		}
		else
		{
			$city= $_POST["city"];
		}
		if(empty($_POST["street"])){
			$hasError=true;
			$err_address="Address Required/something empty";
		}
		else
		{
			$street= $_POST["street"];
		}
		if(empty($_POST["zip"])){
			$hasError=true;
			$err_address="Address Required/something empty";
		}
		else
		{
			$zip= $_POST["zip"];
		}
		
		
		if(!isset($_POST["day"])){
			$hasError = true;
			$err_day= "All/Something empty";
		}
		else{
			$day = $_POST["day"];
		}
		if(!isset($_POST["month"])){
			$hasError = true;
			$err_day= "All/Something empty";
		}
		else{
			$month = $_POST["month"];
		}
		if(!isset($_POST["year"])){
			$hasError = true;
			$err_day= "All/Something empty";
		}
		else{
			$year = $_POST["year"];
		}
		
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(!isset($_POST["abouts"])){
			$hasError = true;
			$err_about = "About Required";
		}else{
			$abouts = $_POST["abouts"];
		}
		
		
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["uname"]."<br>";
			echo $_POST["pass"]."<br>";
			echo $_POST["confirmPass"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["city"]."<br>";
			echo $_POST["street"]."<br>";
			echo $_POST["zip"]."<br>";
		    echo $_POST["day"]."<br>";
			echo $_POST["month"]."<br>";
			echo $_POST["year"]."<br>";
			echo $_POST["gender"]."<br>";
			$arr = $_POST["abouts"];
			
			foreach($arr as $e){
				echo "$e<br>";
			}
			echo $_POST["bio"];
		}
			
		
		
	}
	
?>
<html>
	<body>
		<form action="" method="post">
			<table align="center" style=" border:2px black solid;">
			
			<tr>
		  <td colspan="2" align="center"> <b>Club Member Registration </b></td>
		   </tr>
		   <tr>
		   <td> </td>
		   
		   </tr>
		   
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Userame</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text"><br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass"  value="<?php echo $pass;?>" type="password"><br>
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirmPass" value="<?php echo $confirmPass;?>" type="password"><br>
					<span><?php echo $err_confirmPass;?> </span></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" value="<?php echo $email;?>" type="text" ><br>
					<span><?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td>:<input name="code" value="<?php echo $code;?>"type="text" style="width:50px;"placeholder="Code" >  
		               - <input name="phone" value="<?php echo $phone;?>" type="text" style="width:112px;" placeholder="Number"><br>
					<span><?php echo $err_phone;?></span></td>
				
				</tr>
				<tr>
					<td align="right">Address</td>
					<td> :<input name="address" type="text" value="<?php echo $address;?>" type="text"placeholder="street Address" > <br>&nbsp;
					      <input name="city"type="text" value="<?php echo $city;?>" type="text"style="width:80px;"placeholder="City" >  
		               - <input name="street"type="text"value="<?php echo $street;?>" type="text" style="width:80px;" placeholder="State"><br> &nbsp;
					   <input name="zip" type="text" value="<?php echo $zip;?>" type="text"placeholder="Postal/ Zip Code" >
					   <br>
					<span><?php echo $err_address;?></span></td>
				</tr>
					<tr>
					<td align="right">Birth Date</td>
					<td>:<select name="day">
							<option selected disabled>Day</option>
							<?php
								foreach($d as $p){
									if($p == $day)
										echo "<option selected>$p</option>";
									else
										echo "<option>$p</option>";
								}
							?>
							
						</select> 
						<select name="month">
							<option selected disabled>Month</option>
							<?php
								foreach($m as $q){
									if($q==$month)
										echo "<option selected>$q</option>";
									else
										echo "<option>$q</option>";
								}
							?>
						</select>
						<select name="year">
							<option selected disabled>Year</option>
							<?php
								foreach($y as $o){
									if($o == $year)
										echo "<option selected>$o</option>";
									else
										echo "<option>$o</option>";
								}
							?>
							
						</select>
						<span><?php echo $err_day;?></span>
					</td>
				</tr>
				
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Where didyou hear <br> about us ?</td>
					<td>
						<input type="checkbox" value="A friend or colleaque" <?php if(aboutExist("A friend or colleaque")) echo "checked";?>  name="abouts[]">A friend or colleaque
						<br> 
						<input value="Google" name="abouts[]" <?php if(aboutExist("Google")) echo "checked";?> type="checkbox">Google
						<br>
						<input value="Blog post" name="abouts[]" <?php if(aboutExist("Blog post")) echo "checked";?>  type="checkbox">Blog post 
						<br> 
						<input value="News Artical" name="abouts[]" <?php if(aboutExist("News Artical")) echo "checked";?>  type="checkbox">News Artical
					<br>
					<span><?php echo $err_about;?></span></td>
				</tr>
				<tr>
					<td align="right">Bio :</td>
					<td> <textarea name="bio"><?php echo $bio;?></textarea>
						<br><span><?php echo $err_bio;?></span>
					</td>
					
				</tr>
				<tr>
				<td> </td>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>