<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/feedback.js"></script>
</head>
<div id="feedback"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#feedback-modal">Feedback Modal Form</button></div>
<div id="feedback-modal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<a class="close" data-dismiss="modal">×</a>
<h3>Send Feedback</h3>
</div>
<div class="modal-body">
<form class="feedback" name="feedback">
<strong>Name</strong>
<br />
<input type="text" name="name" class="input-xlarge" value="Laeeq">
<br /><br /><strong>Email</strong><br />
<input type="email" name="email" class="input-xlarge" value="phpzag@gmail.com">
<br /><br /><strong>Message</strong><br />
<textarea name="message" class="input-xlarge">Thanks for tutorials and demos!</textarea>
</form>
</div>
<div class="modal-footer">
<input type="submit" class="btn btn-success" id="submit">Send</button>
<a href="#" class="btn" data-dismiss="modal">Close</a>
</div>
</div>
</div>
</div>
</head>
</html>
<?php
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
echo "<strong>Name</strong>: ".$name."</br>";
echo "<strong>Email</strong>: ".$email."</br>";
echo "<strong>Message</strong>: ".$message."</br>";
echo "<span class='label label-info'>Your feedback has been submitted with above details!</span>";
}
?>
