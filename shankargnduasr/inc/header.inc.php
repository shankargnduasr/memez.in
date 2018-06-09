<?php 
include( "./inc/connect.inc.php" );
// session_start();
// if(!isset($_SESSION["user_login"])) {
// 	$user="";
//   $user1="";
// } else {
// 	$parts = explode("@", $_SESSION["user_login"]);
//   $user = $parts[0];
//   $user1 = $parts[0];
// } 
// if (isset($_GET['u'])) {
// 	$username = mysql_real_escape_string($_GET['u']);
// 	if (ctype_alnum($username)) {
//  	//check user exists
// 	$check = mysql_query("SELECT username, first_name FROM users WHERE username='$username'");
// 	if (mysql_num_rows($check)===1) {
// 	$get = mysql_fetch_assoc($check);
// 	$username = $get['username'];
// 	$firstname = $get['first_name'];	
// 	}
// 	else
// 	{
// 	echo "<meta http-equiv=\"refresh\" content=\"0; url= index.php\">";	
// 	exit();
// 	}
// 	}
// }
// if (isset($_POST['sendmsg'])) {
//  header("Location: send_msg.php?u=$username"); 
// }
//  //User Login Code
// if(isset($_POST["user_login"]) && isset($_POST["password_login"])) {
// 	$user_login = preg_replace('#[^A-Za-z0-9@.]#i','',$_POST["user_login"]);//filter everything but numbers and letters
// 	$password_login = preg_replace('#[^A-Za-z0-9]#i','',$_POST["password_login"]);//filter everything but numbers and
// 	$password_login_md5 = md5($password_login);
// //	echo "$user_login <br />";
// //	echo $password_login_md5;
// 	//Check for their existance
//         $sql = mysql_query("SELECT id FROM users WHERE email='$user_login' AND password='$password_login_md5' AND closed='no' LIMIT 1");//query
// 	//Check for their existance
// 	$userCount = mysql_num_rows($sql);//Count the number of rows returned
// 	if($userCount == 1) {

// 		while($row = mysql_fetch_array($sql)) {
// 			$id = $row["id"];
// 		}
// 		$parts = explode("@", $user_login);
//                 $user_login = $parts[0];
//                 // echo $user_login;
// 		$_SESSION["user_login"] = $user_login;
//                 //header('Location: http://' . $_SERVER['HTTP_HOST'] . '/home.php');
//                 //header('Location: http://www.nomoke.in/');
// 		//header('Location:http://www.nomoke.in/home.php');
// 		header("Location: home.php");
//               exit();
// //$host  = $_SERVER['HTTP_HOST'];
// //$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// //$extra = 'mypage.php';
// //header("Location: http://$host$uri/$extra");
// //exit;
// 	} else {
// 	//	echo '<h1 class="text-center">This information is incorrect, try again</h1>';
//                 header("Location: header1.php");
// 		exit();
// 	}
// }

// //Take the user back
// if ($user) {
// if (isset($_POST['no'])) {
//  header("Location: index.php");
// }
// if (isset($_POST['yes'])) {
// $close_account = mysql_query("UPDATE users SET closed='yes' WHERE username='$user'");
// //echo "<h1 class='text-center'>Your Account has been closed!</h1>";
// session_destroy();
// header("Location: index.php");
// }
// }
// else
// {
// // die ("You must be logged in to view this page!");
// }


// $get_unread_query = mysql_query("SELECT opened FROM pvt_messages WHERE user_to='$user' && opened='no' ");
// $get_unread=mysql_fetch_assoc($get_unread_query);
// $unread_numrows = mysql_num_rows($get_unread_query);
// $unread_numrows="(".$unread_numrows.")";
// //echo $unread_numrows;
// $get_unreaded_query = mysql_query("SELECT id FROM friend_requests WHERE user_to='$user' ");
// $get_unreaded=mysql_fetch_assoc($get_unreaded_query);
// $unread_numrowsed = mysql_num_rows($get_unreaded_query);
// $unread_numrowsed = "(".$unread_numrowsed.")";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="Description" CONTENT="You love people If you love their mind.">
                     <meta name="robots" content="noindex,nofollow">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                   <meta name="viewport" content="width=device-width,initial-scale=1">
                                            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                                                 <link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="shortcut icon" href="img/nomoke.jpg" />
                                                        <title>nomoke</title>
<script type="text/javascript" src="js/main.js"></script>	
</head>
<body>
	<?php
//		if (!$user) {
		echo '<nav class="navbar navbar-default ">
		<div class="container">
		      <div class="row">
			       <div class="col-sm-8">
				         <ul class="nav nav-tabs">
			                   <li role="presentation" ><a href="index.php"><img src="img/nomoke.jpg" title="" style="height: 40px; width: 40px"></a></li>
                               <li><h4 style="color: green" />Nomoke</h4><h4 style="color: green">Find | Match | Chat</h4></li>
			             </ul>
			      </div>
			    <!--  <div class="col-sm-4" >
	                  <ul class="nav navbar-nav navbar-right"> 
	                         <form class="navbar-form navbar-left">
                                    <div class="input-group">
                                          <a href="./login.php">Sign up</a> 
                                          &nbsp;&nbsp;
                                          <a href="./login.php"> Log in</a>
                                      
                                    </div>
                             </form>-->
     <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      -->
                    <!--</ul>  
                </div>-->
          </div>
     </div>
</nav>';
//} else {
// 	echo '<nav class="navbar navbar-default">
//     <div class="container">
//     <div class="row">
//      <!-- <div class="col-sm-24">-->
// <section class="col-xs-24">
//         <ul class="nav navbar-nav">
//       <li role="presentation" ><a href="home.php"><img src="img/nomoke.jpg" title="" style="height: 30px; width: 30px"></a></li>
//       <li role="presentation" class=""><a href="home.php">Home</a></li>
//       <li role="presentation" ><a href="friend_requests.php">notification' . $unread_numrowsed . '</a></li>
//             <li role="presentation" ><a href="account_setting.php">Account Setting</a></li>
//             <li role="presentation" ><a href="my_messages.php">My Messages' . $unread_numrows . '</a></li>
//             <li role="presentation" ><a href="'.$user.'">Profile</a></ul>
// </section>
// </div>
//     </div>
      
//    </nav> ';
//}
?>
<div class="container" style="">
		<div class="row">