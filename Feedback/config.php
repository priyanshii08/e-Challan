<<?php
$server="localhost";
$username="root";
$password="";
$database="e-challan";
$conn=mysqli_connect($server,$username,$password,$database);

if (!$conn) {
  // code...
die('could not connect : '.mysqli_connect_error());

}



?>

<?php
if (isset($_POST['submit'])){
  $radio=$_POST['experience'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $comment=$_POST['comment'];
   $sql=mysqli_query($conn,"INSERT INTO `feedback` ( `Rating`,`name`, `email`,'comment') VALUES ('.$radio.','.$name.', '.$email.','.$comment.')");

   if (!$sql {
    // code...
    echo mysqli_connect_error();
   }
   else {

    echo "Thank you ! ";
   }


  }


 ?>
