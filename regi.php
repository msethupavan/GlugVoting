<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Registration";
$conn = mysqli_connect ( $servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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

    function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
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
	$image=$regd.$ext;
    $target_path = "/opt/lampp/htdocs/GlugVoting/images/".$image;
	move_uploaded_file($temp_name, $target_path);
$query="INSERT into details value('$ID','$name','$image','$focc','$regd','$gender','$course','$dept','$joindate','$email','$phnum','$locality','$techknown','$tinterested','$que','$opinion','$sprojects','$dob','')";
$result=$conn->query($query);
if($result){
	echo '<html><head><style>body{ background-image:url("1.jpg"); width:100%; height:100%; color:white; font-style:vardana;}</style></head><body><center><br><br><br><br><br><br><br><br><br><br><h1>ThanQ&nbsp ',$name,'</h1></center></body></html>';
}
else
	echo "Error: " ."<br>" . $conn->error;
$conn->close();
?>
