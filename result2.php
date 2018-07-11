<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Registration";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo '<html>
<head>
<style>
body{
	background-image:url("m.jpg");
	background-repeat:no-repeat;
	background-attachment:fixed;
}
.t{
	font-size:30px;
	color:white;
}
h1 {
     	font-size: 50px;
     	text-shadow:4px 3px PeachPuff;
}
</style>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
<script>
function hide(){
	document.getElementById("cred").style.display="none";
	return true;
}
</script>
</head>
<body class="container">
<center>
<h1 style="color:yellow">Results</h1>';
if(!isset($_POST['submit'])){
echo '<div id="cred">
<p>Enter admin name and password to know the results</p>
<form action="" method="post" onSubmit="return hide();">
<table >
<tr><td>Name:</td>
<td><input type="text" name="admin" placeholder="admin"/></td></tr>
<tr><td>Password:</td>
<td><input type="password" name="password" placeholder="password"/></td></tr>
</table>
<input type="submit" name="submit" value="View Result"/></center>
</div>';
}
if(isset($_POST['submit'])){
if($_POST['admin']=="admin"&&$_POST['password']=="admin"){
$c="select * from details where voted=1";
$cou=$conn->query($c);
$count=0;
echo '<div class="container-fluid">
<div class="well">';
//$rolls=array('president','Vice','Treasurer','Technical','Organiser','cultural');
//$vote="SELECT name,image,regdno,president from details d join nominations n where d.regd=n.regdno and n.president in (SELECT president FROM nominations ORDER by President)";
$vote="SELECT name,image,regdno,president from details d join nominations n where d.regd=n.regdno and n.president in (select max(President) from nominations)";
//$vote="select name,image from nominations where President=(select max(President) from nominations)";
$result = $conn->query($vote);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	//if($count%3==0)
	echo '<div class="row" align="center">';
	echo  '<div class="col-xs-4">
			<button class="btn"  name="li" value="',$row['regdno'],'">			
				<img src="images/',$row['image'],'" class="img-rounded" alt="President" width="175" height="175"> 
			</button>';
	echo '
		<label>No. of votes=',$row['president'],'</label></div>';
	//if($count%3==2)
	echo '<div class="col-xs-4"></div></div>';
}
//if(($count-1)%3!=2)
	//echo '</div>';
}
$vote="SELECT name,image,Vice from details d join nominations n where d.regd=n.regdno and n.vice= (select max(vice) from nominations)";
//$vote="select name,image from nominations where President=(select max(President) from nominations)";
$result = $conn->query($vote);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	//if($count%3==0)
	echo '<div class="row" align="center">';
	echo  '<div class="col-xs-4">
			<button class="btn"  name="li" value="',$row['regdno'],'">			
				<img src="images/',$row['image'],'" class="img-rounded" alt="President" width="175" height="175"> 
			</button>';
	echo '
		<label>No. of votes=',$row['Vice'],'</label></div>';
	//if($count%3==2)
	echo '<div class="col-xs-4"></div></div>';
}
//if(($count-1)%3!=2)
	//ho '</div>';
}
$vote="SELECT name,image,Treasurer from details d join nominations n where d.regd=n.regdno and n.treasurer= (select max(treasurer) from nominations)";
//$vote="select name,image from nominations where President=(select max(President) from nominations)";
$result = $conn->query($vote);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	//if($count%3==0)
	echo '<div class="row" align="center">';
	echo  '<div class="col-xs-4">
			<button class="btn"  name="li" value="',$row['regdno'],'">			
				<img src="images/',$row['image'],'" class="img-rounded" alt="President" width="175" height="175"> 
			</button>';
	echo '
		<label>No. of votes=',$row['Treasurer'],'</label></div>';
	//if($count%3==2)
	echo '<div class="col-xs-4"></div></div>';
}
//if(($count-1)%3!=2)
	//cho '</div>';
}
$vote="SELECT name,image,Technical from details d join nominations n where d.regd=n.regdno and n.technical= (select max(technical) from nominations)";
//$vote="select name,image from nominations where President=(select max(President) from nominations)";
$result = $conn->query($vote);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	//if($count%3==0)
	echo '<div class="row" align="center">';
	echo  '<div class="col-xs-4">
			<button class="btn"  name="li" value="',$row['regdno'],'">			
				<img src="images/',$row['image'],'" class="img-rounded" alt="President" width="175" height="175"> 
			</button>';
	echo '
		<label>No. of votes=',$row['Technical'],'</label></div>';
	//if($count%3==2)
	echo '<div class="col-xs-4"></div></div>';
}
//if(($count-1)%3!=2)
	//echo '</div>';
}
$vote="SELECT name,image,Organiser from details d join nominations n where d.regd=n.regdno and n.organiser= (select max(organiser) from nominations)";
//$vote="select name,image from nominations where President=(select max(President) from nominations)";
$result = $conn->query($vote);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	//if($count%3==0)
	echo '<div class="row" align="center">';
	echo  '<div class="col-xs-4">
			<button class="btn"  name="li" value="',$row['regdno'],'">			
				<img src="images/',$row['image'],'" class="img-rounded" alt="President" width="175" height="175"> 
			</button>';
	echo '
		<label>No. of votes=',$row['Organiser'],'</label></div>';
	//if($count%3==2)
	echo '<div class="col-xs-4"></div></div>';
	//$count=$count+1;
}
//if(($count-1)%3!=2)
	//echo '</div>';
}
$vote="SELECT name,image,cultural from details d join nominations n where d.regd=n.regdno and n.cultural= (select max(cultural) from nominations)";
//$vote="select name,image from nominations where President=(select max(President) from nominations)";
$result = $conn->query($vote);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	//if($count%3==0)
	echo '<div class="row" align="center">';
	echo  '<div class="col-xs-4">
			<button class="btn"  name="li" value="',$row['regdno'],'">			
				<img src="images/',$row['image'],'" class="img-rounded" alt="President" width="175" height="175"> 
			</button>';	
	echo '
		<label>No. of votes=',$row['cultural'],'</label></div>';
	//if($count%3==2)
	echo '<div class="col-xs-4"></div></div>';
	//$count=$count+1;
}
//if(($count-1)%3!=2)
	//echo '</div>';
}
}
}
echo '</div>
</div>
</body>
</html>';
?>
