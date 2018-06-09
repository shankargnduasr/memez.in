<?php
  mysqli_connect("localhost","shankar123","Callat10","nomoke") or die("Couldn't connect to SQL server");
//  mysql_select_db("nomoke") or die("Couldn't select DB");
$un = "";
$pswd = "";
$reg=@$_POST['reg'];
$un = strip_tags(@$_POST['email']);
$pswd = strip_tags(@$_POST['password']);
if($reg) {
echo "$un<br />";
echo "$pswd<br />";
//$query1 = mysql_query("INSERT INTO demo (username, password) VALUES ('$un','$pswd')");
 //$result = mysqli_query($conn,$query1) or die("Query failed: $query1");
die("<h2>Welcome to nomoke keep matching | keep meeting <br />Login to your account to get started ...</h2>");
}
else {

}
?>
<form action="demo.php" method="POST">
				<input type="text" name="email" size="35" placeholder="Email Address"/><br/><br/>
				<input type="password" name="password" size="35" placeholder="Password"/><br/><br/>
				<input type="submit" name="reg" value="Sign Up!" />

			</form>