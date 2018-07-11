<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Registration";
$conn = mysqli_connect ( $servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<html>
<head>
<title>Voting Form</title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
function validate()
{
var y=/^[1]?[0-9]?[3]?[3]?[0-9]?[A|D|E]?[0-1]?[1-8]?[0-9|A|B|C|D|E|F|G|H]?[0-9]?$/;
if(document.vote1.reg.value.match(y))
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
<style>

body{
	background-image:url("vote1.png");
	background-size:100%;
}

 button {
  display: inline-block;
  padding: 10px 15px;
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
</style>
</head>
<body class="container" >
<div class="container-fluid">

</div>
<div class="container-fluid" align="center">
<h1 align="center"><em>WELCOME TO VOTING FORM<em></h1>
</div><br>
<form name="vote1" method="POST" action="" onSubmit="return validate()"  align="center">
<div class="container-fluid"  align="center">
<div class="form-group"  align="center">
<div class="row" align="center">
<div class="col-xs-4"></div>
   <div class="col-xs-4">
    <label for="ex2"><h3>Registration Number:</h3></label>
    <input class="form-control" id="ex2" type="text" name="reg" align="center" required>
  </div></div><br>
<div class="row" align="center">
<button type="submit"  name="submit" value="Lets VOTE"> <span class="glyphicon glyphicon-user"></span>Lets VOTE</button>
</div></div> 
</div>
</form>';
if(isset($_POST['submit'])){
	$found=1;
	$voted=1;
	$reg=$_POST['reg'];
	$que="select regd,voted from details";
	$regd=$conn->query($que);
	if ($regd->num_rows > 0) {
    		while($row = $regd->fetch_assoc()) {
			if($row['regd']==$reg){
				$found=1;
				if($row['voted']!=1)
				$voted=1;
				break;
			}
		}
		if($found==1&&$voted==1){
			$up="update details set voted=1 where regd='$reg'";
			$update=$conn->query($up);
			$_SESSION["president"] = -1;
			$_SESSION["vice"] = -1;
			$_SESSION["tr"] = -1;
			$_SESSION["te"] = -1;
			$_SESSION["o"] = -1;
			$_SESSION["c"] = -1;
			header('Location:President.php');
		}
		else if($found==0){
			echo '<center><p style="color:red">First Register Yourself to Participate in Voting</p>';
			echo '<a href="reg.html"><input type="button" class="button" value="Register"></a></center>';
		}
		else	echo '<center><p>Sorry you have already participated in Voting</p></center>';
	}
}
echo '</body>
</html>';
?>
