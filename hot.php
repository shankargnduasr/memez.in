<?php include 'header.php';?>

<body>
	<?php include 'nav.php';?>

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
	$con = mysql_connect("localhost","memez","7570@Sbf7")  or die("Couldn't connect to SQL server");
	mysql_select_db("memez",$con) or die("Couldn't select DB");
	$qry="insert into hot (name,image) values ('$name','$image')";
	$result=mysql_query($qry,$con);
        echo $result;
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
	$con = mysql_connect("localhost","memez","7570@Sbf7") or die("Couldn't connect to SQL server");
	mysql_select_db("memez",$con) or die("Couldn't select DB");
	$qry="select * from hot";
	$result=mysql_query($qry,$con);
	while($row =mysql_fetch_array($result)) {
		echo '<section class="col-sm-4">
		<img height="300" width="300" class="img-thumbnail" src="data:image;base64,'.$row[2].' ">
		.<br />.</section>';

	}
	mysql_close($con);
}
?>
<?php include 'footer.php';?>

</body>
</html>