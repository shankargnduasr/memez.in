<?php
ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
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
<link rel="shortcut icon" href="img/logo.jpg" />
                                                        <title>Memez</title>
<script type="text/javascript" src="js/main.js"></script>	
</head>
<body>
	<?php
//		if (!$user) {
		echo '<nav class="navbar navbar-default ">
		<div class="container">
		      <div class="row">
			       <div class="col-sm-12">
				       <h4 class="text-center" style="background-color: darkgreen;color:white">What\'s
				       <br/>
				       <a href="index.php">
				       <button class="col-sm-4" type="button" class="btn btn-success" style="background-color: green;color:white" >New</button></a>
				       <a href="hot.php">
				       <button class="col-sm-4" type="button" class="btn btn-success" style="background-color: green;color:white">Hot</button>
				       </a>
				       <a href="old.php">
                       <button class="col-sm-4" type="button" class="btn btn-success" style="background-color: green;color:white">Old</button>
                       </a>
				       </h4> 
				       
			      </div>
			    <!--  <div class="col-sm-4" >
	                  <ul class="nav navbar-nav navbar-right"> 
	                         <form method="POST" enctype="multipart/form-data" class="navbar-form navbar-left">
                                    <div class="input-group">
                                          
                                      <input type="file" name="image">
                                      <br />
	<input type="submit" name="sumit" value="Upload" />
                                    </div>
                             </form>
                             
     <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      -->
                   <!-- </ul>  
                </div>-->
          </div>
     </div>
</nav>';
?>
<?php
if(isset($_POST['sumit'])) {
	if(getimagesize($_FILES['image']['tmp_name']) == FALSE )
	{
        echo "Please select an image.";
	}
	else {
		$image = addslashes($_FILES['image']['tmp_name']);
		$name = addslashes($_FILES['image']['name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);
		saveimage($name,$image);
	}
}
displayimage();
function saveimage($name,$image)  {
	$con = mysql_connect("localhost","memez","7570@Sbf7");
	mysql_select_db("memez",$con);
	$qry="insert into new (name,image) values ('$name','$image')";
	$result=mysql_query($qry,$con);
	if($result) {
		echo "<br />Image uploaded.";
		//mysql_close($con);
	}
	else {
		echo "<br />Image not uploaded.";
		//mysql_close($con);

	}
	mysql_close($con);
	
}
function displayimage() {
	$con = mysql_connect("localhost","memez","7570@Sbf7");
	mysql_select_db("memez",$con);
	$qry="select * from new";
	$result=mysql_query($qry,$con);
	while($row =mysql_fetch_array($result)) {
		echo '<section class="col-sm-4">
		<img height="300" width="300" class="img-thumbnail" src="data:image;base64,'.$row[2].' ">
		.<br />.</section>';

	}
	mysql_close($con);
}
?>
<div class="container">
      <div class="row">
           <h4 class="text-center">
	&copy;All copy rights are revised by memez.in 2017
	</h4>
   </div>
</div>
<script type="text/javascript" src="../js/jquery-3.0.0.min.js" ></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>