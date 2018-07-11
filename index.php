<html>
<head>
<title>Registration Form</title>
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<style>
body{
overflow: auto;
resize: both;
}
marquee{
     text-shadow: 2px 2px #FF0000;
	font-style: italic;
	font-size:30px;
}
label{
	font-style: normal;
}
h1 {
   text-align:center;
    text-shadow: 2px 2px #FF0000;
	font-style: italic;
	font-size:40px;
}
.reg{
	font-style:alex Brush;
	color:black;
	font-size:22px;
	
	}
textarea {
    width: 300px;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
	}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" >
	function yes() {
		document.getElementById('opi').style.display='';
		document.getElementById('projects').style.display='';
		document.getElementById('swecha').style.display='none';
	}
	function no() {
		document.getElementById('swecha').style.display='';
		document.getElementById('opi').style.display='none';
		document.getElementById('projects').style.display='none';		
	}
	function bt(){
		document.getElementById('btech').style.display='';
		document.getElementById('mtech').style.display='none';
		document.getElementById('mba').style.display='none';
		document.getElementById('ntg').style.display='none';
	}
	function mt() {
		document.getElementById('mtech').style.display='';
		document.getElementById('btech').style.display='none';
		document.getElementById('mba').style.display='none';
		document.getElementById('ntg').style.display='none';
	}
	function mb(){
		document.getElementById('mba').style.display='';
		document.getElementById('btech').style.display='none';
		document.getElementById('mtech').style.display='none';
		document.getElementById('ntg').style.display='none';
	}
	function validate() {
		var x=/^[a-zA-Z.' ']+$/;
		var y=/^[1]?[0-9]?[3]?[3]?[0-9]?[A|D|E]?[0-9]?[1-8]?[0-9|A|B|C|D|E|F|G|H]?[0-9]?$/;
		if(document.registration.name.value.match(x))
		{
		;
		}
		else
		{
		alert("name doesnot contain special characters");
		return false;
		}
		if(document.registration.regd.value.length!=10)
		{
		alert("invalid registration number");
		return false;
		}
		if(document.registration.regd.value.match(y))
		{
		;
		}
		else
		{
		alert("invalid registration number");
		return false;
		}
		var d=document.registration.dob.value;
		var mydate=new Date(d);
		var today=new Date();
		if(mydate>today)
		{
		alert("date should not be grater then current date");
		return false;
		}
		if(isNaN(document.registration.phnum.value)){
			alert("enter valid phone number");	
			return false;	
		}
		if(document.getElementById('m').checked||document.getElementById('f').checked||document.getElementById('o').checked)
		{
		;
		}
		else 
		{
				alert("please enter gender ");
				return false;				
		}
		if(document.getElementById('B').checked||document.getElementById('M').checked||document.getElementById('MB').checked)
		{
		;
		}
		else 
		{
				alert("please select course ");
				return false;				
		}
		if(document.registration.joindate.value==0)
		{
		alert("please select joining year");
		return false;
		}
		if(document.registration.locality.value==0)
		{
		alert("please select locality");
		return false;
	
	}

	if((document.getElementById('B').checked&&document.getElementById('btech').value==0)||(document.getElementById('M').checked&&document.getElementById('mtech').value==0)||(document.getElementById('MB').checked&&document.getElementById('mba').value==0))
	{
	alert("please select department name");
	return false;
	}
	if(document.getElementById('sy').checked||document.getElementById('sn').checked)
		{
		;
		}
		else 
		{
				alert("please select you know about swecha ");
				return false;				
		}	
var text="M";
	text+=document.registration.regd.value[1];
	if(document.registration.regd.value[5]=='A')
	{
	text+="10";
	}
	if(document.registration.regd.value[5]=='D')
	{
	text+="13";
	}
	if(document.registration.regd.value[5]=='E')
	{
	text+="14";
	}
	text+=document.registration.regd.value[6];
	text+=document.registration.regd.value[7];
	var count=0;
	if(document.registration.regd.value[8]=='A')
	{
	text+="10";
	count++;
	}
	if(document.registration.regd.value[8]=='B')
	{
	text+="11";
	count++;
	}
	if(document.registration.regd.value[8]=='C')
	{
	text+="12";
	count++;
	}
	if(document.registration.regd.value[8]=='D')
	{
	text+="13";
	count++;
	}
	if(document.registration.regd.value[8]=='E')
	{
	text+="14";
	count++;
	}
	if(document.registration.regd.value[8]=='F')
	{
	text+="15";
	count++;
	}
	if(document.registration.regd.value[8]=='G')
	{
	text+="16";
	count++;
	}
	if(document.registration.regd.value[8]=='H')
	{
	text+="17";
	count++;
	}
	if(count==0)
	{
	text+=document.registration.regd.value[8];
	}
	text+=document.registration.regd.value[9];
	//alert("your unique id="+text);
	return true;
	}
</script>
</head>
<body class="bg-info">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <h1>REGISTRATION FORM</h1>
<marquee>MVGR STUDENTS CLUB</marquee>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" ></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="pic7.png"  width="2013px" height="1500px" alt="image1">
    </div>

    <div class="item">
      <img src="pic12.png" width="2013px" height="1500px" alt="image2">
    </div>

    <div class="item">
      <img src="pic11.png"  width="2013px" height="1500px" alt="image3">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<form name="registration" enctype="multipart/form-data" action="" method="POST" onSubmit="return validate()">

<table>
<tr>
<td><label>Name:</label></td><td style="display:none;" name="uniqid">UID</td>
<td><label><input type="text" name="name" required/></label></td></tr>
<tr><td><label>Upload Image:</label></td><td><input type="file" name="uploadedimage"  required/></td></tr>
<tr>
<td><label>Father Occupation:</label></td>
<td><input type="text" name="foccupation" required/></td></tr>
<tr>
<td><label>Registration Number:</label></td>
<td><input type="text" name="regd" required/></td></tr>
<tr>
<td><label>Date of Birth:</label></td>
<td><input type="date" name="dob" placeholder="yyyy-mm-dd" required/></td>
</tr>
<tr><td><label>Gender:</label></td>
<td>
<label><input type="radio" name="gender" value="male" id="m" />MALE</label>
<label><input type="radio" name="gender" value="female" id="f" selected />FEMALE</label>
<label><input  type="radio" name="gender" value="other" id="o"/>OTHER</label></td>
</tr>
<tr><td><label>COURSE:</label></td>
<td>
<label><input type="radio" name="course" value="BTECH" id="B" onClick ="bt()"/>BTech</label>
<label><input type="radio" name="course" value="MTECH" id="M" onClick="mt()" selected/>MTech</label>
<label><input type="radio" name="course" value="MBA" id="MB" onClick="mb()"/>MBA</label></td>
</tr>
<tr>
<td><label>DEPT</label></td><td>
<select name="mbdept" id="mba" style="display:none;">
<option value="0">--select--</option>
  <option value="finance">Finance</option>
  <option value="hr">HR</option>
</select>
<select name="mtdept" id="mtech" style="display:none;">
<option value="0">--select--</option>
  <option value="cse">CSE</option>
  <option value="ece">ECE</option>
  <option value="eee">EEE</option>
  <option value="civil">CIVIL</option>
  <option value="mech">MECH</option>
</select>
<select name="bdept" id="btech" style="display:none;">
<option value="0">--select--</option>
  <option value="cse">CSE</option>
  <option value="ece">ECE</option>
  <option value="eee">EEE</option>
  <option value="it">IT</option>
  <option value="chem">CHEM</option>
  <option value="civil">CIVIL</option>
  <option value="mech">MECH</option>
</select>
<select name="ntg" id="ntg">
<option value="0">--select--</option>
</td>
</tr>
<tr>
<td><label>Year of joining</label></td>
<td>
<select name="joindate">
<option value="0">--select--</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
</select></td>
</tr>
<tr>
<td><label>Email:</label></td><td><input type="email" name="email" required/></td>
</tr>
<tr>
<td><label>Phone Number:</label></td><td><input type="text" name="phnum" required/></td>
</tr>
<tr>
<td><label>Locality</label></td>
<td>
<select name="locality">
<option value="0">--select--</option>
<option value="vishakapataanam">vishakapatnam</option>
  <option value="vizianagaram">vizianagaram</option>
  <option value="other">other</option>
</select></td>
</tr>
<tr>
<td><label>Technologies known</label></td>
<td><textarea name="techknown" ></textarea></td></tr>
<tr>
<td><label>Technologies interested</label></td>
<td><textarea  name="tinterested" ></textarea></td></tr>

<tr><td><label>Do you know about Swecha?</label></td>
<td><label><input type="radio" name="que" value="yes" id="sy" onClick =yes()> Yes</label>&nbsp
<label><input type="radio" name="que" value="no" id="sn" onClick =no()>No</label></td></tr>
<tr id="swecha" style="display:none;"><td><a target="_blank" href="https://swecha.org">Swecha</a></td></tr>
<tr id="opi" style="display:none;"><td>Opinions/Views:</td><td><input type="text" name="opinion"/></td></tr>
<tr id="projects" style="display:none;">
<td><label>Interested Swecha Projects</label></td>
<td><label><input type="checkbox" name="sprojects[]" value="BS"/>Balaswecha</label><br><label><input type="checkbox" name="sprojects[]" value="SL"/>Swecha Live</label><br><label>
<input type="checkbox" name="sprojects[]" value="FB"/>Freedom Box</label></td></tr>
</table>
<center><input type="submit" name="submit" value="submit" style="curser:pointer"/></center>
</form></body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Registration";
$squery="select regd from details";
$conn = mysqli_connect ( $servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$found=0;
if(isset($_POST['submit'])){
$regs=$conn->query($squery);
if($regs->num_rows>0){
	while($row=$regs->fetch_assoc()){
		if($row['regd']==$_POST['regd']){
			$found=1;
			break;
		}
	}
}
if($found==1){
	echo "<script>alert('already registered')</script>";
}
    function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return 'false';
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return 'false';
       }
     }
if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
	//echo $file_name;
	//echo 'next';
	//echo $temp_name;
	//echo 'next';
	//echo $imgtype;
	//echo 'next';
	//echo $ext;
}
if($ext=='false'){
	echo '<script>alert("Invalid Image type.Only .bmp .gif .jpg .png are supported")</script>';
}
if($found==0&&$ext!='false'){
$ID=$_POST['regd'];
$name=$_POST['name'];
$focc=$_POST['foccupation'];
$regd=$_POST['regd'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$course=$_POST['course'];
if($course=='BTECH')
	$dept=$_POST['bdept'];
if($course=='MTECH')
	$dept=$_POST['mtdept'];
if($course=='MBA')
	$dept=$_POST['mbdept'];
$joindate=$_POST['joindate'];
$email=$_POST['email'];
$phnum=$_POST['phnum'];
$locality=$_POST['locality'];
$techknown=$_POST['techknown'];
$tinterested=$_POST['tinterested'];
$que=$_POST['que'];
if($que=="yes"){
	$opinion=$_POST['opinion'];
	$sprojects=implode(",",$_POST['sprojects']);
}
else{
	$opinion="--";
	$sprojects="--";
}
	$image=$regd.$ext;
    $target_path = "/opt/lampp/htdocs/GlugVoting/images/".$image;
	move_uploaded_file($temp_name, $target_path);
$query="INSERT into details value('$ID','$name','$image','$focc','$regd','$gender','$course','$dept','$joindate','$email','$phnum','$locality','$techknown','$tinterested','$que','$opinion','$sprojects','$dob','')";
$result=$conn->query($query);
if($result){
	//echo '<html><head><style>body{ background-image:url("1.jpg"); width:100%; height:100%; color:white; font-style:vardana;}</style></head><body><center><br><br><br><br><br><br><br><br><br><br><h1>ThanQ&nbsp ',$name,'</h1></center></body></html>';
	//echo "inserted";
if($gender=='male')
	$des='Mr.';
else if($gender=='female')
	$des='Mrs.';
	echo '<script>alert("Thank you for registering ',$des,$name,'")</script>';
}
else
	echo "Error: " ."<br>" . $conn->error;
}
}
?>

</html>
