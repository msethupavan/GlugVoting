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
	echo "connected";;
if(isset($_POST['$submit'])){
echo $_POST['regnum'];
echo "s";
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
	$query="INSERT INTO nominations VALUES (' ', '$reg','$p','$vp','$t','$th','$o','$c' )";
	$result=$conn->query($query);
	echo '<br>';
	if($result){
		echo "inserted";
		echo '<script>alert("Thanks for nomination");</script>';
		//echo '<img src="a.png" alt="thanks for nomination" width="100%" height="100%"/><br>';
	}
 	else {
		$que="select * from nominations where regdno='$reg'";
		$nom=$conn->query($que);
		if($nom->num_rows==0){
			echo "<script>alert('You have to register first')</script>";
		}
		while($row = $nom->fetch_assoc()){
    		echo "<script>alert('Sorry!! you have already nominated for the posts')</script>",'<br>';
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
}
echo '<html lang="en">
<head>
  <title>Nomination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
h1 {
    background-color: burlywood;
    font-size:50px;
    width: 500px
    border: 100px ;
    color:cadetblue;
    padding: 25px;
    margin: 25px;
    text-shadow:4px 3px black;
}
h2 {
    color:DarkBlue;
    font-size: 50px;
    text-shadow:4px 3px black;
}
.table{
      color:DeepSkyBlue;
      font-style:italic;
      font-size: 25px;
      
	}
.button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: cadetblue;
  border: none;
  border-radius: 10px;
  box-shadow: 0 6px #999;
}
</style>
</head>
<body>

<div class="container" align="center"> 
  <h2>Nominate</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Nomination Form</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 align="center" class="modal-title">NOMINEE FORM</h1>
        </div>
        <div class="modal-body">';


echo '
<table  align="center" class="table">
<h2 align="center">FOR NOMINEE SELECETION</h2>
<form action="" method="post" >
<tr><td>REGISTRATION NUMBER:<input type="text" name="regnum"/></td></tr>
<tr><td>ROLLS INTRESTED:</td></tr>
<tr><td><label><input type="checkbox" name="p" value="1"/> President</label></td></tr>
<tr><td><label><input type="checkbox" name="vp" value="1"/> VicePresident</label></td></tr>
<tr><td><label><input type="checkbox" name="t" value="1"/> Treasurer</label></td></tr>
<tr><td><label><input type="checkbox" name="th" value="1"/> TechnicalHead</label></td></tr>
<tr><td><label><input type="checkbox" name="o" value="1"/> Organiser</label></td></tr>
<tr><td><label><input type="checkbox" name="c" value="1"/> Cultural</label></td></tr>
<tr><td><input type="submit" name="submit" class="button"/></td></tr>
</form>
</table>';

echo         '</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>';
?>
