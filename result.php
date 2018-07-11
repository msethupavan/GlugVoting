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
<form action="result.php" method="post" onSubmit="return hide();">
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
echo '<table class="t" align="center"><tr>';
if($_POST['admin']=="manasa"&&$_POST['password']=="komali"){
//$vote="select name,image from nominations where President=(select max(President) from nominations)";
$c="select * from details where voted=1";
$cou=$conn->query($c);
$count=$cou->num_rows;
$vote="SELECT name,image,president from details d join nominations n where d.regd=n.regdno and n.president= (select max(President) from nominations)";
echo "<td>president:</td>";
$rv=$conn->query($vote);
if ($rv->num_rows > 0) {
    while($row = $rv->fetch_assoc()) {
	echo '<td><label><img src="images/',$row['image'],'"alt="name of president" width="100px" height="100px" ><br>',$row['name'],'-',$row['president']/*round(($row['president']/$count)*100,2),'%'*/,'</td>';
    }
}
echo '</tr><tr>';
//$vote="select name,image from nominations where vice=(select max(vice) from nominations)";
$vote="SELECT name,image,Vice from details d join nominations n where d.regd=n.regdno and n.vice= (select max(vice) from nominations)";
echo "<td>vice president:</td>";
$rv=$conn->query($vote);
if ($rv->num_rows > 0) {
    while($row = $rv->fetch_assoc()) {
	echo '<td><label><img src="images/',$row['image'],'"alt="name of vice president" width="100px" height="100px" ><br>',$row['name'],'-',$row['Vice']/*round(($row['Vice']/$count)*100,2),'%'*/,'</td>';
    }
}
echo '</tr><tr>';
echo "<td>tresurer:</td>";
$vote="SELECT name,image,Treasurer from details d join nominations n where d.regd=n.regdno and n.treasurer= (select max(treasurer) from nominations)";
//$vote="select name,image from nominations where Treasurer=(select max(Treasurer) from nominations)";
$rv=$conn->query($vote);
if ($rv->num_rows > 0) {
    while($row = $rv->fetch_assoc()) {
    echo '<td><label><img src="images/',$row['image'],'"alt="name of treasurer" width="100px" height="100px" ><br>',$row['name'],'-',$row['Treasurer']/*round(($row['Treasurer']/$count)*100,2),'%'*/,'</td>';
    }
}
echo '</tr><tr>';
echo "<td>techlead</td>";
$vote="SELECT name,image,Technical from details d join nominations n where d.regd=n.regdno and n.technical= (select max(technical) from nominations)";
//$vot="select regdno from nominations where Technical=(select max(Technical) from nominations)";
$rv=$conn->query($vote);
if ($rv->num_rows > 0) {
    while($row = $rv->fetch_assoc()) {
	echo '<td><label><img src="images/',$row['image'],'"alt="name of techlead" width="100px" height="100px" ><br>',$row['name'],'-',$row['Technical']/*round(($row['Technical']/$count)*100,2),'%'*/,'</td>';
    }
}
echo '</tr><tr>';
echo "<td>Organiser</td>";
$vote="SELECT name,image,Organiser from details d join nominations n where d.regd=n.regdno and n.organiser= (select max(organiser) from nominations)";
//$vote="select regdno from nominations where Organiser=(select max(Organiser) from nominations)";
$rv=$conn->query($vote);
if ($rv->num_rows > 0) {
    while($row = $rv->fetch_assoc()) {
	echo '<td><label><img src="images/',$row['image'],'"alt="name of organizer" width="100px" height="100px" ><br>',$row['name'],'-',$row['Organiser']/*round(($row['Organiser']/$count)*100,2),'%'*/,'</td>';
    }
}
echo '</tr><tr>';
echo "<td>cultural:</td>";
$vote="SELECT name,image,cultural from details d join nominations n where d.regd=n.regdno and n.cultural= (select max(cultural) from nominations)";
//$vote="select regdno from nominations where cultural=(select max(cultural) from nominations)";
$rv=$conn->query($vote);
if ($rv->num_rows > 0) {
    while($row = $rv->fetch_assoc()) {
	echo '<td><label><img src="images/',$row['image'],'"alt="name of cultural" width="100px" height="100px" ><br>',$row['name'],'-',$row['cultural']/*round(($row['cultural']/$count)*100,2),'%'*/,'</td>';
    }
}
echo '</tr>';
}
}
echo '</table></body></html>';
?>
