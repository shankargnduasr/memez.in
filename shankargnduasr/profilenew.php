<?php 
include( "./inc/connect.inc.php" );
session_start();
if(!isset($_SESSION["user_login"])) {
  $user1="";
} else {
  $parts = explode("@", $_SESSION["user_login"]);
  $user1 = $parts[0];
} 
$get_unread_query = mysql_query("SELECT opened FROM pvt_messages WHERE user_to='$user1' && opened='no' ");
$get_unread=mysql_fetch_assoc($get_unread_query);
$unread_numrows = mysql_num_rows($get_unread_query);
$unread_numrows="(".$unread_numrows.")";
//echo $unread_numrows;
$get_unreaded_query = mysql_query("SELECT id FROM friend_requests WHERE user_to='$user1' ");
$get_unreaded=mysql_fetch_assoc($get_unreaded_query);
$unread_numrowsed = mysql_num_rows($get_unreaded_query);
$unread_numrowsed = "(".$unread_numrowsed.")";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta name="Description" CONTENT="Author: A.N. Author, Illustrator: P. Picture, Category: Books, Price:  £9.24, Length: 784 pages">
              <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
                     <meta name="robots" content="noindex,nofollow">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                   <meta name="viewport" content="width=device-width,initial-scale=1">
                                            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                                                 <link rel="stylesheet" type="text/css" href="#">
                                                        <title><img src="img/nomoke.jpg">nomoke</title>
<script type="text/javascript" src="js/main.js"></script> 
</head>
<body>
  <div class="container">
<div class="row">
  <section class="col-xs-24">
    <?php
    if (!$user1) {
    echo '<nav class="navbar navbar-default ">
    <div class="container">
          <div class="row">
             <div class="col-sm-8">
                 <ul class="nav nav-tabs">
                         <li role="presentation" ><a href="index.php"><img src="img/nomoke.jpg" title="" style="height: 40px; width: 40px"></a></li>
                               <li><h4 style="color: green" />Nomoke</h4><h4 style="color: green">Find | Match | Chat</h4></li>
                   </ul>
            </div>
            <div class="col-sm-4" >
                    <ul class="nav navbar-nav navbar-right"> 
                           <form class="navbar-form navbar-left">
                                    <div class="input-group">
                                          <button class="btn btn-danger" type="submit"><a href="login.php">Sign up</a> 
                                          </button>&nbsp;&nbsp;
                                          <button class="btn btn-success" type="submit" ><a href="login.php"> Log in</a>
                                          </button>
                                    </div>
                             </form>
     <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      -->
                    </ul>  
                </div>
          </div>
     </div>
</nav>';
} else {
  echo '<nav class="navbar navbar-default">
    <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <ul class="nav nav-tabs">
      <li role="presentation" ><a href="home.php"><img src="img/nomoke.jpg" title="" style="height: 30px; width: 30px"></a></li>
      <li role="presentation" class=""><a href="home.php">Home</a></li>
      <li role="presentation" ><a href="friend_requests.php">notification' . $unread_numrowsed . '</a></li>
      <li role="presentation" ><a href="./matched/'.$user1.'">Matched</a>
            <li role="presentation" ><a href="account_setting.php">Account Setting</a></li>
            <li role="presentation" ><a href="my_messages.php">My Messages' . $unread_numrows . '</a></li>
            <li role="presentation" ><a href="'.$user1.'">Profile</a></ul>
</div>
<div class="col-sm-4" >
  <ul class="nav navbar-nav navbar-right">
  <form class="navbar-form navbar-left">
  <div class="input-group">
    <!--<input type="text" class="form-control" placeholder="Search by user_id" disabled="disabled"> -->
    <div class="input-group-btn">
      <!--<button class="btn btn-success" type="submit" disabled="disabled">GO
     </button>-->
    </div>
  </div>
</form>
    <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
  
    </ul>
</div>
</div>
    </div>
      
    </nav> ';
}
?>





<?php
if (isset($_GET['u'])) {
	$username = mysql_real_escape_string($_GET['u']);
	if (ctype_alnum($username)) {
 	//check user exists
	$check = mysql_query("SELECT username, first_name FROM users WHERE username='$username'");
	if (mysql_num_rows($check)===1) {
	$get = mysql_fetch_assoc($check);
	$username = $get['username'];
	$firstname = $get['first_name'];	
	}
	else
	{
	echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/match/index.php\">";	
	exit();
	}
	}
}
$get_info = mysql_query("SELECT first_name, last_name, bio FROM users WHERE username='$username'");
  $get_row = mysql_fetch_assoc($get_info);
  $db_firstname = $get_row['first_name'];
  $db_last_name = $get_row['last_name'];
  $db_bio = $get_row['bio'];
//$post = @$_POST['post'];
//if ($post != "") {
//$date_added = date("Y-m-d");
//$added_by = $user;
//$user_posted_to = $username;

//$sqlCommand = "INSERT INTO posts VALUES('', '$post','$date_added','$added_by','$user_posted_to')";  
//$query = mysql_query($sqlCommand) or die (mysql_error()); 

//}
//Check whether the user has uploaded a profile pic or not
  $check_pic = mysql_query("SELECT profile_pic FROM users WHERE username='$username'");
  $get_pic_row = mysql_fetch_assoc($check_pic);
  $profile_pic_db = $get_pic_row['profile_pic'];
  if ($profile_pic_db == "") {
  $profile_pic = "img/default1.jpg";
  }
  else
  {
  $profile_pic = "userdata/profile_pics/".$profile_pic_db;
  }
?>
<div class="profilePosts">
	<?php
if (isset($_POST['sendmsg'])) {
 header("Location: send_msg.php?u=$username"); 
}

$errorMsg = "";
  if (isset($_POST['addfriend'])) {
     $friend_request = $_POST['addfriend'];
     
     $user_to = $user1;
     $user_from = $username;
     
     if ($user_to == $username) {
      $errorMsg = "You can't match yourself!<br />";
     }
     else
     {
      $create_request = mysql_query("INSERT INTO friend_requests VALUES ('','$user_to','$user_from')");
      $errorMsg = "Your match Request has been sent!";
     }

  }
  else
  {
   //Do nothing
  }

		


	?>
</div>

<div class="container" style="">
<div class="row">
<img  height="100" width="100" src="<?php echo $profile_pic; ?>" class="img-circle img-responsive" alt="your image" class="pull-left" >
<a href="logout.php"><button class="pull-right" style="color: green">
  Logout
</button></a><br />
<h2 class=" "><?php echo $db_firstname; ?> <?php echo $db_last_name; ?> </h2>
<form action="<?php echo $username; ?>" method="POST">
<?php
$friendsArray = "";
$countFriends = "";
$friendsArray12 = "";
$addAsFriend = "";
$selectFriendsQuery = mysql_query("SELECT friend_array FROM users WHERE username='$username'");
$friendRow = mysql_fetch_assoc($selectFriendsQuery);
$friendArray = $friendRow['friend_array'];
if ($friendArray != "") {
   $friendArray = explode(",",$friendArray);
   $countFriends = count($friendArray);
   $friendArray12 = array_slice($friendArray, 0, 12);

$i = 0;
if (in_array($user1,$friendArray)) {
 $addAsFriend = '<input type="submit" name="removefriend" value="UnFriend">';
}
else
{
 $addAsFriend = '<input type="submit" name="addfriend" value="Add Friend">';
}
echo "<br />$addAsFriend <br /><br />";
}
else
{
 $addAsFriend = '<input type="submit" name="addfriend" value="Add Friend">';
 echo "<br />$addAsFriend <br /><br />";
}
//$user = logged in user
//$username = user who owns profile
if (@$_POST['removefriend']) {
  //Friend array for logged in user
  $add_friend_check = mysql_query("SELECT friend_array FROM users WHERE username='$user1'");
  $get_friend_row = mysql_fetch_assoc($add_friend_check);
  $friend_array = $get_friend_row['friend_array'];
  $friend_array_explode = explode(",",$friend_array);
  $friend_array_count = count($friend_array_explode);
  
  //Friend array for user who owns profile
  $add_friend_check_username = mysql_query("SELECT friend_array FROM users WHERE username='$username'");
  $get_friend_row_username = mysql_fetch_assoc($add_friend_check_username);
  $friend_array_username = $get_friend_row_username['friend_array'];
  $friend_array_explode_username = explode(",",$friend_array_username);
  $friend_array_count_username = count($friend_array_explode_username);
  
  $usernameComma = ",".$username;
  $usernameComma2 = $username.",";
  
  $userComma = ",".$user1;
  $userComma2 = $user1.",";
  
  if (strstr($friend_array,$usernameComma)) {
   $friend1 = str_replace("$usernameComma","",$friend_array);
  }
  else
  if (strstr($friend_array,$usernameComma2)) {
   $friend1 = str_replace("$usernameComma2","",$friend_array);
  }
  else
  if (strstr($friend_array,$username)) {
   $friend1 = str_replace("$username","",$friend_array);
  }
  //Remove logged in user from other persons array
  if (strstr($friend_array,$userComma)) {
   $friend2 = str_replace("$userComma","",$friend_array);
  }
  else
  if (strstr($friend_array,$userComma2)) {
   $friend2 = str_replace("$userComma2","",$friend_array);
  }
  else
  if (strstr($friend_array,$user1)) {
   $friend2 = str_replace("$user1","",$friend_array);
  }

  $friend2 = "";

  $removeFriendQuery = mysql_query("UPDATE users SET friend_array='$friend1' WHERE username='$user1'");
  $removeFriendQuery_username = mysql_query("UPDATE users SET friend_array='$friend2' WHERE username='$username'");
  echo "Match Removed ...";
  header("Location: $username");
}
?>
<?php echo $errorMsg; ?><br />
<input type="submit" name="sendmsg" value="Send Msg" />
</form>
  <!--<h3 class="pull-left">Gender:Male </h3>-->
  <!--<h3 class="pull-right">Age:21 years </h3>-->
  <h3 class="text-center">status: <?php echo $db_bio; ?></h3>

<!--

<div class="textHeader"><?php// echo $username; ?>'s Profile</div>
<div class="profileLeftSideContent">
<?php
  //$about_query = mysql_query("SELECT bio FROM users WHERE username='$username'");
 // $get_result = mysql_fetch_assoc($about_query);
 // $about_the_user = $get_result['bio'];

 // echo "Status : $about_the_user";
?>
-->
</div>
<div class="textHeader"><?php// echo $username; ?><!--'s Friends--></div>
<div class="profileLeftSideContent">
<?php
if ($countFriends != 0) {
foreach ($friendArray12 as $key => $value) {
 $i++;
 $getFriendQuery = mysql_query("SELECT * FROM users WHERE username='$value' LIMIT 1");
 $getFriendRow = mysql_fetch_assoc($getFriendQuery);
 $friendUsername = $getFriendRow['username'];
 $friendProfilePic = $getFriendRow['profile_pic'];

 if ($friendProfilePic == "") {
  echo "<a href='$friendUsername'><img src='img/default1.jpg' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" height='50' width='40' style='padding-right: 6px;'></a>";
 }
 else
 {
  echo "<a href='$friendUsername'><img src='userdata/profile_pics/$friendProfilePic' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" height='50' width='40' style='padding-right: 6px;'></a>";
 }
}
}
else
echo $username." has no matches yet.";
?>
</div>
<?php include( "./inc/footer.inc.php" ); ?>