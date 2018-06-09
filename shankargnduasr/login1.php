<?php include( "./inc/header.inc.php" );
 ?>
<?php
 $reg=@$_POST['reg'];
 //declearing variables to prevent errors
 $fn = "";//First Name
 $ln = "";//Last Name
 $em = "";//Email
 $em2 = "";//Email 2
 $pswd = "";//Password
 $pswd2 = "";//Password 2
 $un = "";
 $d = "";// Sign up Date
 $u_check = "";
 //registration form
 $fn = strip_tags(@$_POST['fname']);
 $ln = strip_tags(@$_POST['lname']);
 $em = strip_tags(@$_POST['email']);
 $em2 = strip_tags(@$_POST['email2']);
 $pswd = strip_tags(@$_POST['password']);
 $pswd2 = strip_tags(@$_POST['password2']);
   $parts = explode("@", $em);
  $un = $parts[0];
 $d =  date("Y-m-d");//Year - Month - Day
 if($reg) {
 	if($em == $em2 ) {
 		//Check if user already exists
 	//	$u_check = mysql_query("SELECT username FROM users WHERE username='$un'");
 		//Count the amount of rows where username = $un
 	//	$check = mysql_num_rows($u_check);
 		//Check whether Email already exists in the database
$e_check = mysql_query("SELECT email FROM users WHERE email='$em'");
//Count the number of rows returned
$email_check = mysql_num_rows($e_check);
 		//if($check == 0) {
 			if ($email_check == 0) {
 			//check all of the fields have been filed in
 			if($fn && $ln && $em && $em2 && $pswd && $pswd2 ) {
 				// check that passwords match
 				if($pswd == $pswd2) {
 					//check the maximum length of the username/first name/last name does not exceed 25 characters
 					if( strlen($fn)>25 || strlen($ln)>25) {
 						echo "<h1 class='text-center'>The maximum limit for username/first name/last name is 25 characters!</h1>";
 					}
 					else {
 						// check the maximum length of password does not exceed 25 characters and is not less than 5 characters
 						if(strlen($pswd)>30 || strlen($pswd)<5) {
 							echo "<h1 class='text-center'>Your password must be between 5 and 30 characters long!</h1>";
 						}
 						else {
 							//encrypt password and password 2 using md5 before sending to database
 							$pswd = md5($pswd);
 							$pswd2 = md5($pswd2);
 							$query1 = mysql_query("INSERT INTO `match` VALUES ('','$un','0')");
 							$qury = mysql_query("INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$pswd','$d','0','hi I am here to find like minded people.','','','no')");
 							die("<h2>Welcome to nomoke keep matching | keep meeting <br />Login to your account to get started ...</h2>");
 						}
 					}
 				}
 				else {
 					echo "<h1 class='text-center'>Your passwords don't match!</h1>";
 				}
 			}
 			else {
 				echo "<h1 class='text-center'>Please fill in all of the fields</h1>";
 			}
 		}
 		else
{
 echo "<h1 class='text-center'>Sorry, but it looks like someone has already used that email!</h1>";
}
//}
 //		else {
 	//		echo "Username already taken ...";
 	//	}
 	}
 	else {
 		echo "<h1 class='text-center'>Your E-mails don't match!</h1>";
 	}
 }
 //User Login Code
if(isset($_POST["user_login"]) && isset($_POST["password_login"])) {
	$user_login = preg_replace('#[^A-Za-z0-9@.]#i','',$_POST["user_login"]);//filter everything but numbers and letters
	$password_login = preg_replace('#[^A-Za-z0-9]#i','',$_POST["password_login"]);//filter everything but numbers and
	$password_login_md5 = md5($password_login);
	//echo $user_login;
	//echo $password_login;
	$sql = mysql_query("SELECT id FROM users WHERE email='$user_login' AND password='$password_login_md5' AND closed='no' LIMIT 1");//query
	//Check for their existance
	$userCount = mysql_num_rows($sql);//Count the number of rows returned
	if($userCount == 1) {
		while($row = mysql_fetch_array($sql)) {
			$id = $row["id"];
		}
		$parts = explode("@", $user_login);
        $user_login = $parts[0];
		$_SESSION["user_login"] = $user_login;
		header("location:home.php");
		exit();
	} else {
		echo '<h1 class="text-center">This information is incorrect, try again</h1>';
		exit();
	}
}
?>
  <div style="width: 800px; margin: 0px auto 0px auto;">  
  	<h1 class='text-center'>Your Account has been closed!</h1>
<table>
	<tr>
		<td width="80%" valign="top">
			<h2>Sign in</h2>
			<form action="login.php" method="POST">
				<input type="text" name="user_login" size="35" placeholder="Email"/><br/><br/>
				<input type="password" name="password_login" size="35" placeholder="Password"/><br/><br/>
				<input type="submit" name="login" value="Login" />
			</form>
		</td>
		<td width="20%" valign="top">
			<h2>Sign Up</h2>
			<form action="login.php" method="POST">
				<input type="text" name="fname" size="35" placeholder="First Name"/><br/><br/>
				<input type="text" name="lname" size="35" placeholder="Last Name"/><br/><br/>
				<input type="text" name="email" size="35" placeholder="Email Address"/><br/><br/>
				<input type="text" name="email2" size="35" placeholder="Email Address (again)"/><br/><br/>
				<input type="password" name="password" size="35" placeholder="Password"/><br/><br/>
				<input type="password" name="password2" size="35" placeholder="Password (again)"/><br/><br/>
				<input type="submit" name="reg" value="Sign Up!" />

			</form>
		</td>
	</tr>
</table>
</div>
<?php include( "./inc/footer.inc.php" ); ?>