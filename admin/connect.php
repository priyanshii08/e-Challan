<?php
$username = filter_input(INPUT_POST, 'username');
$challan = filter_input(INPUT_POST, 'challan_no');
$crime = filter_input(INPUT_POST, 'crime');
$vechile_no = filter_input(INPUT_POST, 'vechile_no');
$fine = filter_input(INPUT_POST, 'fine');
if (!empty($challan)){
if (!empty($fine)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "e-challan";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
  $sql="INSERT INTO `challan`( `username`, `challan_no`, `crime`, `vechile_no`, `fine`)
   VALUES ('$username','$challan','$crime','$vechile_no','$fine')";
//$sql = "INSERT INTO 'challan'(username ,challan_no,crime,vechile_no,fine)
//values ('$username','$challan','$crime','$vechile_no','$fine')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body{
      background: linear-gradient(to right, #267871, #136a8a);
    }
    .btn {
      background: #28668f;
      background-image: -webkit-linear-gradient(top, #28668f, #17252e);
      background-image: -moz-linear-gradient(top, #28668f, #17252e);
      background-image: -ms-linear-gradient(top, #28668f, #17252e);
      background-image: -o-linear-gradient(top, #28668f, #17252e);
      background-image: linear-gradient(to bottom, #28668f, #17252e);
      -webkit-border-radius: 8;
      -moz-border-radius: 8;
      border-radius: 8px;
      font-family: Arial;
      color: #ffffff;
      font-size: 20px;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
    }

    .btn:hover {
      background: #207a2f;
      background-image: -webkit-linear-gradient(top, #207a2f, #11734a);
      background-image: -moz-linear-gradient(top, #207a2f, #11734a);
      background-image: -ms-linear-gradient(top, #207a2f, #11734a);
      background-image: -o-linear-gradient(top, #207a2f, #11734a);
      background-image: linear-gradient(to bottom, #207a2f, #11734a);
      text-decoration: none;
    }

      .back{
        padding-right:  200;
        padding-left: 200;
      }
      a{
        color: #fff;
        text-decoration: none;
      }
    </style>

  </head>
  <body>
    <br>
    <div class="back">
      <br>


      <button type="button" class="btn"name="button"style="align-items: center;">
        <a href="admin.html">Back to admin panel</a>

    </div>
    </button>
  </body>
</html>
