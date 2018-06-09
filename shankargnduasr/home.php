<?php include( "./inc/header.inc.php" );
if ($user) {

}
else
{
 die ("You must be logged in to view this page!");
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
  echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/index.php\">"; 
  exit();
  }
  }
} ?>
    <div class="container" style="">
    <div class="row">
             <h1 class="text-center">Meet Like Minded People</h1>
             <h3 class="text-center">if People'll enter same number you entered It's match</h3>
               <div class="col-md-4 col-md-offset-4">
                     <div class="form-group has-danger">
                     <form action="home.php" method="POST">
                        <input type="text" name="data" style="width: 360px; height: 30px " placeholder="Enter any number: eg- 9, 54, 456, 5435" />
    <!--<input class="form-control" type="text" id="inputName" placeholder=""></input> -->
                </div>
                       <div class="col-md-24 col-md-offset-0">
                                  <div class="form-group has-danger">
                                        <input class="btn btn-success btn-block" title="LOG IN for match now!" type="submit" name="reg"></input>
                                  </div>
                       </div>
                       </form>
                </div>
       </div>
</div>
<?php
if (!isset($_SESSION["user_login"])) {
    echo "<h1 class='text-center'>You must log in first!</h1>";
}
else
{
  $reg=@$_POST['reg'];
 //declearing variables to prevent errors
 $fn = "";
 $fn = strip_tags(@$_POST['data']);
 if (mysql_errno()) { 
    die('Invalid query: ' . mysql_error());
}
else {
  if($reg) {
 //   echo $reg;
   // echo $fn;
   // echo $user;

//$qury = mysql_query("INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$pswd','$d','0','hi I am here to find like minded people.','','','no')");

    //$qury1 = mysql_query("INSERT INTO `match` VALUES ('','$user','$fn')");
    $qury = mysql_query("UPDATE `match` SET data='$fn' WHERE name='$user'");
    $result = mysql_query("SELECT name,data FROM `match` WHERE data=$fn");
        $storeArray = Array();
         echo "<div class='container'>
      <div class='row'>";
      $s=0;
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
          $s++;
      // $storeArray[] = (string) $row['name']; 
        $get_info = mysql_query("SELECT first_name, last_name, bio FROM users WHERE username='".$row['name']."' ");
  $get_row = mysql_fetch_assoc($get_info);
  $db_firstname = $get_row['first_name'];
  $db_last_name = $get_row['last_name'];
  $db_bio = $get_row['bio'];
  if($user != $row['name']) {
        echo "<section class='col-sm-4'>
                        <h2 class='text-center'>";
                        //echo $row['name'];
                        echo "$db_firstname ";
                        echo $db_last_name;
                        echo "</h2>
                               <img  height='200' width='200' src='img/default1.jpg' class='img-circle center-block' alt='image' title='LOG IN for chat and Many more' />
                        <h5 class='text-center'>$db_bio</h5>
                               <h3 class='text-center'><a href='".$row['name']."' target='_blank'>match now!</a></h3>
                               </section>";
}
else {

$check_pic = mysql_query("SELECT profile_pic FROM users WHERE username='".$row['name']."'");
  $get_pic_row = mysql_fetch_assoc($check_pic);
  $profile_pic_db = $get_pic_row['profile_pic'];
  if ($profile_pic_db == "") {
  $profile_pic = "img/default1.jpg";
  }
  else
  {
  $profile_pic = "userdata/profile_pics/".$profile_pic_db;
  }


    echo "<section class='col-sm-4'>
                        <h2 class='text-center'>";
                       // echo $row['name'];
                        echo "You";
                        echo "</h2>
                               <img  height='200' width='200' src='$profile_pic' class='img-circle center-block' alt='image' title='LOG IN for chat and Many more' />
                        <h5 class='text-center'>$db_bio</h5>
                               <h3 class='text-center'><a href='".$row['name']."' target='_blank'>match now!</a></h3>
                               </section>";
}
}
if($s==1) {
  echo "<h3 class='text-left'>You have no similar matches.Try again</h3>";
}
echo "</div></div> <div class='container'>
  <div class='row'>
  <h4 class='text-center'>
  &copy;All copy rights are revised by nomake.in 2017
  </h4>
  </div>
  </div>
  </div>
</div>";
    die(mysql_error());
}
else {
  echo '<div class="container">
      <div class="row">
           <h1>Online Now!</h1>
    
   </div>
</div>
<div class="container">
      <div class="row">
             <section class="col-sm-4">
                        <h2 class="text-center">Alisha Singal</h2>
                               <img  height="200" width="200" src="img/default1.jpg" class="img-circle center-block" alt="image" title="LOG IN for chat and Many more" >
                        <h3 class="text-center">Hi I am here to meet like minded people </h3>
                               <button class="btn btn-success btn-block" title="LOG IN for match up" disabled>Locked</button>
            </section>
             <section class="col-sm-4">
                         <h2 class="text-center">Shweta Singh</h2>
                                <img  height="200" width="200" src="img/default1.jpg" class="img-circle center-block" alt="image" title="LOG IN for chat and Many more" >
                         <h3 class="text-center">Hi I am here to find like minded people</h3>
                                 <button class="btn btn-success btn-block" title="LOG IN for match up" disabled>Locked
                                 </button>
             </section>
             <section class="col-sm-4">
                          <h2 class="text-center">Rahul Ranjan</h2>
                               <img  height="200" width="200" src="img/default1.jpg" class="img-circle center-block" alt="image" title="LOG IN for chat and Many more" >
                          <h3 class="text-center">Hi I am here to find like minded people</h3>
                                   <button class="btn btn-success btn-block" title="LOG IN for match up" disabled>Locked
                                   </button>
             </section>
             <section class="col-sm-4">
                        <h2 class="text-center">Aditya Raj</h2>
                               <img  height="200" width="200" src="img/default1.jpg" class="img-circle center-block" alt="image" title="LOG IN for chat and Many more" >
                        <h3 class="text-center">Hi I am here to find like minded people</h3>
                                  <button class="btn btn-success btn-block" title="LOG IN for match up" disabled>Locked
                                  </button>
             </section>
             <section class="col-sm-4">
                        <h2 class="text-center">Pooja Singh </h2>
                                <img  height="200" width="200" src="img/default1.jpg" class="img-circle center-block" alt="image" title="LOG IN for chat and Many more" >
                                <h3 class="text-center">Hi I am here to find like minded people</h3>
                                <button class="btn btn-success btn-block" title="LOG IN for match up" disabled>Locked
                                </button>
             </section>
             <section class="col-sm-4">
                          <h2 class="text-center">Sahil Gupta </h2>
                                 <img  height="200" width="200" src="img/default1.jpg" class="img-circle center-block" alt="image" title="LOG IN for chat and Many more" >
                          <h3 class="text-center">Hi I am here to find like minded people</h3>
                                <button class="btn btn-success btn-block" title="LOG IN for match up" disabled>Locked
                                </button>
             </section>
      </div>
</div>';
}
}
} 
?>
<?php include( "./inc/footer.inc.php" ); ?>