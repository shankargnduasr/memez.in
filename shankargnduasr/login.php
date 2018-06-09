<?php include( "./inc/header.inc.php" );
 ?><?php
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
 							$query1 = mysql_query("INSERT INTO `match`
(name,data) VALUES ('$un','0')");
 							$qury = mysql_query("INSERT INTO users (username,first_name,last_name,email,password,sign_up_date,activated,bio,profile_pic,friend_array,closed) VALUES ('$un','$fn','$ln','$em','$pswd','$d','0','hi I am here to meet like minded people.','','','no')");

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
?>
<div class="container">
      <div class="row">
     
 <section class="col-sm-6">
               <h2>Sign in</h2>
			<form action="login.php" method="POST">
				<input type="text" name="user_login" size="35" placeholder="Email"/><br/><br/>
				<input type="password" name="password_login" size="35" placeholder="Password"/><br/><br/>
				<input type="submit" name="login" value="Login" />
			</form>         
            </section>
<section class="col-sm-6">
               <h2>Sign Up</h2>
			<form action="login.php" method="POST">
				<input type="text" name="fname" size="35" placeholder="First Name"/><br/><br/>
				<input type="text" name="lname" size="35" placeholder="Last Name"/><br/><br/>
				<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" size="35" placeholder="Email Address"><br/><br/>
                                <input type="email" name="email2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" size="35" placeholder="Email Address(again)"><br/><br/>
				<input type="password" name="password" size="35" placeholder="Password"/><br/><br/>
				<input type="password" name="password2" size="35" placeholder="Password (again)"/><br/><br/>
				<input type="submit" name="reg" value="Sign Up!" />

			</form>
			       
            </section>
</div>
</div>
<?php include( "./inc/footer.inc.php" ); ?>