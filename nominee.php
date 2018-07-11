<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Registration";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
else
	echo "connected";
$p=0;
$vp=0;
$t=0;
$th=0;
$o=0;
$c=0;
$rolls=array(0,0,0,0,0,0);
$reg=$_POST['regnum'];
if(isset($_POST['p'])){
	$p=1;
}
if(isset($_POST['vp'])){
	$vp=1;
}
if(isset($_POST['t'])){
	$t=1;
}
if(isset($_POST['th'])){
	$th=1;
}
if(isset($_POST['o'])){
	$o=1;
}
if(isset($_POST['c'])){
	$c=1;
}
//$rolls=array($_POST['p'],$_POST['vp'],$_POST['t'],$_POST['th'],$_POST['o'],$_POST['c']);
//foreach($rolls as $value)
//{
	//$query="insert into $value values('$reg','$uload',0)";
	echo '<html><body><center>';
	$query="INSERT INTO nominations VALUES (' ', '$reg','$p','$vp','$t','$th','$o','$c' )";
	$result=$conn->query($query);
	echo '<br>';
	if($result){
	//	echo "inserted";
		echo '<img src="a.png" alt="thanks for nomination" width="100%" height="100%"/><br>';
	}
 	else {
		$que="select * from nominations where regdno='$reg'";
		$nom=$conn->query($que);
		if($nom->num_rows==0){
			echo "<script>alert('You have to register first')</script>";
		}
		while($row = $nom->fetch_assoc()){
    		echo "Sorry!! you have already nominated for the posts",'<br>';
		if($row['President']>0)
			echo "president",'<br>';
		if($row['Vice']>0)
			echo "vice president",'<br>';
		if($row['Treasurer']>0)
			echo "treasurer",'<br>';
		if($row['Technical']>0)
			echo "technical",'<br>';
		if($row['Organiser']>0)
			echo "organiser",'<br>';
		if($row['cultural']>0)
			echo "cultural",'<br>';
		}
	}
//}
echo '</center></body></html>';
?>
