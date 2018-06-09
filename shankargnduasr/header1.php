<?php 
include( "./inc/connect.inc.php" );
session_start();
if(!isset($_SESSION["user_login"])) {
	$user="";
  $user1="";
} else {
	$parts = explode("@", $_SESSION["user_login"]);
  $user = $parts[0];
  $user1 = $parts[0];
} 
$get_unread_query = mysql_query("SELECT opened FROM pvt_messages WHERE user_to='$user' && opened='no' ");
$get_unread=mysql_fetch_assoc($get_unread_query);
$unread_numrows = mysql_num_rows($get_unread_query);
$unread_numrows="(".$unread_numrows.")";
//echo $unread_numrows;
$get_unreaded_query = mysql_query("SELECT id FROM friend_requests WHERE user_to='$user' ");
$get_unreaded=mysql_fetch_assoc($get_unreaded_query);
$unread_numrowsed = mysql_num_rows($get_unreaded_query);
$unread_numrowsed = "(".$unread_numrowsed.")";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="Description" CONTENT="Author: A.N. Author, Illustrator: P. Picture, Category: Books, Price:  £9.24, Length: 784 pages">
    
                     <meta name="robots" content="noindex,nofollow">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                   <meta name="viewport" content="width=device-width,initial-scale=1">
                                            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                                                 <link rel="stylesheet" type="text/css" href="./css/style.css">
                                                        <title><img src="img/nomoke.jpg">nomoke</title>
<script type="text/javascript" src="js/main.js"></script>	
</head>
<body>
	<div class="container">
<div class="row">
	<section class="col-xs-24">
		<?php
		if (!$user) {
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
                                          <a href="./login.php">Sign up</a> 
                                          &nbsp;&nbsp;
                                          <a href="./login.php"> Log in</a>
                                      
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
            <li role="presentation" ><a href="account_setting.php">Account Setting</a></li>
            <li role="presentation" ><a href="my_messages.php">My Messages' . $unread_numrows . '</a></li>
            <li role="presentation" ><a href="'.$user.'">Profile</a></ul>
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
<h1 class="text-center">This information is incorrect, try again</h1>