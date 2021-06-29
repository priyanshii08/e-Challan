<!DOCTYPE html>
<html lang="en">

<head>
 	<title>Feedback Form</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Style.css">

</head>

<body>

<div class="view">
	<img src="1.svg">
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<h1 class="text-center mt-5 font-weight-bold">Feefback</h1>
			<hr class="bg-white">
			<h6 class="text-center">Please write your feedback below:</h6>
			<h3 class="mt-4">How do you rate your overall experience?</h3>
      <?php
      if ($_SERVER['REQUEST_METHOD']=='POST') {
   $name=$_POST['name'];
  $email=$_POST['email'];
  $comment=$_POST['comment'];

  //$licence=$_POST['licence'];



  $servername="localhost";
  $username="root";
  $password="";
  $database="e-challan";

  $conn=mysqli_connect($servername,$username,$password,$database);

  //create a db
  $sql="INSERT INTO `feedback`(  `name`, `email`, `comment`) VALUES ($name','$email','$comment')";

  $result=mysqli_query($conn,$sql);

  if($result){
    echo "connection sucessful";
  }
  else {
    echo "failed";
  }
}


       ?>



			<form method="post">
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Bad</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Average</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Good</label>

			</div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Full Name*<br>
					<input type="text" id="text" name="name" required="" placeholder="User Name"></label>

					<label class="col-md-4">Email*<br>
					<input type="text" id="text" required="" name="email"placeholder="abc@gmail.com"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Age*<br>
					<input type="number" id="text" required="" placeholder="age"></label>

					<label class="col-md-4">Phone*<br>
					<input type="number" id="text" required="" placeholder="+0000000000"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-8">Message*<br>
					<textarea id="message" required="" name="comment" placeholder="Write yor message here" cols="48" rows="5"></textarea></label>
			</div>

						<div class="row">
				<div class="col-md-2"></div>
				<button class="btn btn-primary" style="width: 53.5%; position: absolute; margin-left: 15%;">Submit</button>
			</div>
			</form>
</div>

</body>
</html>
