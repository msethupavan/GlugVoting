<?php
session_start();
//echo "the president value is" . $_SESSION["president"] . ".<br>";
if(isset($_SESSION["te"])){
if($_SESSION["te"]==-1){
$servername = "localhost";
$username = "root";
$password = "";
$database = "Registration";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$count=0;
if(!isset($_POST['li'])){
echo '<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<style>
	h1 {
     	font-size: 50px;
     	text-shadow:4px 3px PeachPuff;
    	}</style>

</head>
<body class="container" >
<br>
<h1 align="center">TECHNICAL</h1>
<div class="container-fluid">
<div class="well">
<form name="election" action="" method="post" onSubmit="return selected();">';
$sql="select name,regdno,image from details r join nominations n where r.Regd=n.regdno AND n.Technical>0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	if($count%3==0)
	echo '<div class="row" align="center">';
	echo  '<div class="col-xs-4">
			<button class="btn"  name="li" value="',$row['regdno'],'">			
				<img src="images/',$row['image'],'" class="img-rounded" alt="Technical" width="175" height="175"> 
			</button>		
		</div>';
	if($count%3==2)
	echo '</div></br>';
	$count=$count+1;
}
	echo  '<div class="row" align="center"><div class="col-xs-4">
			<button class="btn"  name="li" value="none">			
				<img src="nota-india.jpg" class="img-rounded" alt="Technical" width="175" height="175"> 
			</button>		
		</div></div>';
if(($count-1)%3!=2)
	echo '</div>';
}
echo '</form>
</div>
</div>
</body>
</html>';}
if(isset($_POST['li'])){
	$value=$_POST['li'];
	echo $value;
	if($value!="none"){
		$insert="UPDATE nominations SET Technical=Technical+1 where regdno='$value'";
		$ins=$conn->query($insert);
	}
	else{
		$ins=1;
		//header('Location:page.html');
	}
	if($ins){
		$_SESSION["te"] = $_SESSION["te"]+1;
		header('Location:organizer.php');
	}
}
}
else
	header('Location:error.html');
}
else{
	header('Location:vote1.php');
}
?>
