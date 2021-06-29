
<!--<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

	  $servername="localhost";
	  $username="root";
	  $password="";
	  $database="priya";

	  $conn=mysqli_connect($servername,$username,$password,$database);

$radio=$_POST["experience"];
$name=$_POST["name"];
$email=$_POST["email"];
//$comment=$_POST["comment"];

$sql = "INSERT INTO `Feedback` ( `Rating`,`name`, `email`) VALUES ('$radio','$name', '$email')";
	$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
// die(mysqli_connect_error());
//echo "success";
if ($result) {
	// code...
	echo "hi";
}

}

 ?>-->

<!doctype html>
	<html>
		<head>
  		  <title>Feedback Form</title>
		  <link rel="stylesheet" href="css/bootstrap.min.css">
		  <script src="bootstrap.min.js"></script>
		  <script src="jquery-3.3.1.min.js"></script>
		  <link rel="stylesheet" href="Stylesheet.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
	<style>
	body{
		background-image:url(1.jpg);
		background-repeat:no-repeat;
		background-attachment:fixed;

		width: 100%;
}

body:hover{
	filter: none;

}

.radio-inline{
margin: 0px 40px 20px 0px;
cursor: pointer;}


</style>
		<body>




<!--=========================================Feed-back Form============================================================-->

<div class="view">



	<div id="form">

		<div class="col-md-12" id ="mainform">
			<div class="col-sm-6">
			   <h2  class="contact-us" style="font-size:72px; color:#000;"><strong style="font-size:5cm; color:#555;">F</strong>eedback.</h2>
			</div>
			<div class="col-sm-6" >
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
	  $database="priya";

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

				<form action="home.html"method="post">
					<label class="radio-inline"><input type="radio" name="experience" value="Good" >Good</label>
					<label class="radio-inline"><input type="radio" name="experience" value=Average>Average</label>
					<label class="radio-inline"><input type="radio" name="experience" value="bad">bad</label>
					<br>

				<label><h4>Name:</h4> </label>
				<input type="text" name="name" size="20"  class=" form-control" placeholder="User name or Phone Number" required />
				<label><h4>Email:</h4></label>
				 <input type="email" name="email" size="20"  class=" form-control" placeholder="User Email" >
				<h4>Comments:</h4>
				<textarea class="form-control"name="comment" rows="6"  placeholder="Message" ></textarea>
				<br>
			<input type="submit" name="submit"class="btn btn-info" id="btn" style="text-shadow:0 0 3px #000000; font-size:24px;">
			</form>



			</div>
		</div>
	</div>


</div>
</div>
	</body>
</html>
