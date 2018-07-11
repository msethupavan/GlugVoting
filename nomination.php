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
	//echo "connected";
if(isset($_POST['submit'])){
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
	echo '<html><head>';
	$query="INSERT INTO nominations VALUES (' ', '$reg','$p','$vp','$t','$th','$o','$c' )";
	$result=$conn->query($query);
	//echo '<br>';
	if($result){
	//	echo "inserted";
		//echo '<img src="a.png" alt="thanks for nomination" width="100%" height="100%"/><br>';
		echo "<script>alert('Thank you for the Nomination')</script>";
	}
 	else {
		$que="select * from nominations where regdno='$reg'";
		$nom=$conn->query($que);
		if($nom->num_rows==0){
			echo "<script>alert('You have to register first')</script>";
		}
		else
			//echo "<script>aler"
		while($row = $nom->fetch_assoc()){
		if($row['President']>0)
			$roll="President";//echo "president",'<br>';
		if($row['Vice']>0)
			$roll=$roll."\n Vice president";//echo "vice president",'<br>';
		if($row['Treasurer']>0)
			$roll=$roll."\n Treasurer";//echo "treasurer",'<br>';
		if($row['Technical']>0)
			$roll=$roll."\n Technincal";//echo "technical",'<br>';
		if($row['Organiser']>0)
			$roll=$roll."\n Organiser";//echo "organiser",'<br>';
		if($row['cultural']>0)
			$roll=$roll."\n Cultural";//echo "cultural",'<br>';
		}
		//echo $roll;
		echo "<script>alert('Sorry!! you have already nominated for the posts",'<br>',$roll,"')</script>";
	}
	//echo '</center></body></html>';
//}
}
else{
echo '<html>
<head>';}
echo '<title>Nomination Form</title>
<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
<style>
.c{color:white;
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
  background-color:black;
  border: none;
  border-radius: 10px;
  box-shadow: 0 6px #999;
}
body{
	background-image:url("9.png");
	background-size:100%;
}
</style>
<script>
function validate()
{
var y=/^[1]?[0-9]?[3]?[3]?[0-9]?[A|D|E]?[0-1]?[1-8]?[0-9|A|B|C|D|E|F|G|H]?[0-9]?$/;
if(document.nomination.regnum.value.match(y))
		{
		;
		}
		else
		{
		alert("invalid registration number");
		return false;
		}
return true;
}
</script>
	
</head>
<body>
<div class="container">
<div class="form-group"  align="center">
<div class="row" align="center">
<div class="col-xs-4"></div>
  <form action="" method="POST" onSubmit="return validate()" name="nomination">
   <div class="col-xs-4">
    <label><h3 class="c">Registration Number:</h3></label>
    <input class="form-control"  type="text" name="regnum" align="center" required>
  </div></div></div>
<div class="row">

<div class="col-xs-5"></div>
	<div class="col-xs-4" class="c">
<p class="c">ROLLS INTRESTED:</p>
    <div class="checkbox" >
      <label class="c"><input type="checkbox" name="p" value="1"/> President</label>
    </div>
    <div class="checkbox">
      <label class="c"><input type="checkbox" name="vp" value="1"/>Vice President</label>
    </div>
    <div class="checkbox">
      <label class="c"><input type="checkbox" name="t" value="1"/>Treasurer</label>
    </div>
<div class="checkbox">
      <label class="c"><input type="checkbox" name="th" value="1"/>TechnicalHead</label>
    </div>
<div class="checkbox">
      <label class="c"><input type="checkbox" name="o" value="1"/>Organiser</label>
    </div>
<div class="checkbox">
      <label class="c"><input type="checkbox" name="c" value="1"/> Cultural</label>
    </div></div>
</div>
<div class="row" align="center">
<input type="submit" class="btn btn-info btn-lg" name="submit" value="Nominate">
</div>
  </form>
</div>
</div>
</body>
</html>';
?>
