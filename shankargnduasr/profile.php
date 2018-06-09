<?php include( "./inc/header.inc.php" );
error_reporting(E_ERROR | E_PARSE);
if ($user) {

}
else
{
 die ("You must be logged in to view this page!");
}

 ?>
<?php

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
  $profile_pic = "img/default_pic.jpg";
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
     
     $user_to = $user;
     $user_from = $username;
     
     if ($user_to == $username) {
      $errorMsg = "You can't match yourself!<br />";
     }
     else
     {
      $create_request = mysql_query("INSERT INTO friend_requests(user_from,user_to) VALUES ('$user_to','$user_from')");
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
<img  height="200" width="200" src="<?php echo $profile_pic; ?>" class="img-circle img-circle" alt="image" class="pull-left" >
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
if (in_array($user,$friendArray)) {
 $addAsFriend = '<input type="submit" name="removefriend" value="UnMatch">';
}
else
{
 $addAsFriend = '<input type="submit" name="addfriend" value="Add">';
}
echo "<br />$addAsFriend <br /><br />";
}
else
{
 $addAsFriend = '<input type="submit" name="addfriend" value="Add">';
 echo "<br />$addAsFriend <br /><br />";
}
//$user = logged in user
//$username = user who owns profile
if (@$_POST['removefriend']) {
  //Friend array for logged in user
  $add_friend_check = mysql_query("SELECT friend_array FROM users WHERE username='$user'");
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
  
  $userComma = ",".$user;
  $userComma2 = $user.",";
  
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
  if (strstr($friend_array,$user)) {
   $friend2 = str_replace("$user","",$friend_array);
  }

  $friend2 = "";

  $removeFriendQuery = mysql_query("UPDATE users SET friend_array='$friend1' WHERE username='$user'");
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
<div class="textHeader"><?php // echo $username; ?><!--'s Friends--></div>
<div class="profileLeftSideContent">
<?php

//$get_info = mysql_query("SELECT username FROM users");
  //$get_row = mysql_fetch_assoc($get_info);
  //$db_username = $get_row['username'];
//echo "$db_username ";
if (!in_array($user,$friendArray)) {

echo "<h1 class=''>List:</h1>";

foreach ($friendArray12 as $key => $value) {
 $i++;
 $getFriendQuery = mysql_query("SELECT * FROM users WHERE username='$value' LIMIT 1");
 $getFriendRow = mysql_fetch_assoc($getFriendQuery);
 $friendUsername = $getFriendRow['username'];
 $friendProfilePic = $getFriendRow['profile_pic'];
 $lastname1 = $getFriendRow['last_name'];
  $firstname1 = $getFriendRow['first_name'];  
  $db_bio1 = $getFriendRow['bio'];  
$sql = mysql_query("SELECT username FROM users WHERE username='$user'");//query
$username = $get['username'];
			if($user==$username) {
if ($friendProfilePic == "") {

 echo "<section class='col-sm-4'>
                        <h2 class='text-center'>";
                        //echo $row['name'];
                        echo "$firstname1 ";
                        echo $lastname1;

                      //  echo "$friendUsername";
                       // echo $friendUsername;
                        echo "
                               <img  height='200' width='200' src='img/default_pic.jpg' class='img-circle center-block' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" />
                        <h3 class='text-center'>$db_bio1</h3>
                               <h3 class='text-center'><a href='$friendUsername'>View Profile</a></h3>
                               </section>";



 // echo "<a href='$friendUsername'><img src='img/default_pic.jpg' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" height='50' width='40' style='padding-right: 6px;'></a>";
 }
 else
 {
   echo "<section class='col-sm-4'>
                        <h2 class='text-center'>";
                        //echo $row['name'];
                        echo "$firstname1 ";
                        echo $lastname1;
                     //   echo "$friendUsername ";
                      //  echo $friendUsername;

echo "<a href='$friendUsername'><img  height='200' width='200' src='userdata/profile_pics/$friendProfilePic' class='img-circle center-block' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" /></a>
                        <h3 class='text-center'>$db_bio1</h3>
<h3 class='text-center'><a href='$friendUsername'>View Profile</a></h3>
                             
                             </section>";




//  echo "<a href='$friendUsername'><img src='userdata/profile_pics/$friendProfilePic' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\" height='50' width='40' style='padding-right: 6px;'></a>";
 }
}
else {

}
}
}
else
//echo $username." has no matches yet.";
?>
</div>
</div>


<?php include( "./inc/footer.inc.php" ); ?>