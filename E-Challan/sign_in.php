


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>normal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

    <?php

    //index.php

    //Include Configuration File
    include('basic.php');

    $login_button = '';

    //This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
    if(isset($_GET["code"]))
    {
     //It will Attempt to exchange a code for an valid authentication token.
     $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

     //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
     if(!isset($token['error']))
     {
      //Set the access token used for requests
      $google_client->setAccessToken($token['access_token']);

      //Store "access_token" value in $_SESSION variable for future use.
      $_SESSION['access_token'] = $token['access_token'];

      //Create Object of Google Service OAuth 2 class
      $google_service = new Google_Service_Oauth2($google_client);

      //Get user profile data from google
      $data = $google_service->userinfo->get();

      //Below you can find Get profile data and store into $_SESSION variable
      if(!empty($data['given_name']))
      {
       $_SESSION['user_first_name'] = $data['given_name'];
      }

      if(!empty($data['family_name']))
      {
       $_SESSION['user_last_name'] = $data['family_name'];
      }

      if(!empty($data['email']))
      {
       $_SESSION['user_email_address'] = $data['email'];
      }

      if(!empty($data['gender']))
      {
       $_SESSION['user_gender'] = $data['gender'];
      }

      if(!empty($data['picture']))
      {
       $_SESSION['user_image'] = $data['picture'];
      }
     }
    }

    //This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
    if(!isset($_SESSION['access_token']))
    {
     //Create a URL to obtain user authorization
     $login_button = '<a  class="social goog" href="'.$google_client->createAuthUrl().'">   <i class="fa fa-google-plus"></i>
</a>';
    }

    ?>
    <?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $num = $_POST['username'];

  $pass =$_POST['password'];
//  echo '<div class="alert alert-success alert-dismissible fade show " role="alert" >
//  <strong> Success ! </strong> You have Successfully Login.
//  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span></button>
//  </div>';
  // code...
}
     ?>
     <?php
     include 'login.php';
     if($login){
     echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Success!</strong> You are logged in
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
         </button>
     </div> ';
     }
     if($showError){
     echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Error!</strong> '. $showError.'
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
         </button>
     </div> ';
     }
     ?>

<div class="">

    <h1 class="h1" style="align:center;">e-Challan</h1><br>
    <div class="container" id="container">
    	<div class="form-container sign-up-container">
    		<form action="file:///C:/Users/Hp/Desktop/project/minor%20project/User/user.html" method="post">
    			<h1> Sign Up</h1>
    			<div class="social-container">
    				<a href="#" class="social face"><i class="fa fa-facebook" aria-hidden="true"></i></a>

            <?php
            if($login_button == '')
            {
             echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
             echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
             echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
             echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
             echo '<h3><a href="logout.php">Logout</h3></div>';
            }
            else
            {
             echo $login_button ;
            }
            ?>


    				<a href="#" class="social link"><i class="fa  fa-linkedin"aria-hidden="true"></i></a>
    			</div>
    			<span>or use your email for registration</span>
          <input type="text" name="register"placeholder=" Vechile Registration ID" required/>
    			<input type="text" name="number" placeholder="Vechile Number" required />
    			<input type="password" name="pass" placeholder="Password" required/>
    			<button>Sign UP</button>

    		</form>
    	</div>
    	<div class="form-container sign-in-container">
    		<form action="sign_in.php" method="post">
    			<h1> Sign in</h1>
    			<div class="social-container">
    				<a href="#" class="social face"><i class="fa fa-facebook"></i></a>
    			<!--	<a href="#" class="social goog"><i class="fa fa-google-plus"></i></a>-->

                      <?php
                      if($login_button == '')
                      {
                       echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                       echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
                       echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
                       echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
                       echo '<h3><a href="logout.php">Logout</h3></div>';
                      }
                      else
                      {
                       echo $login_button ;
                      }
                      ?>
    				<a href="#" class="social link"><i class="fa fa-linkedin"></i></a>
    			</div>
    			<span>or use your account</span>
    			<input type="text" class="form-control" name="username" placeholder="Username" required />
    			<input type="password" class="form-control" name="password" placeholder="Password" required/>
    			<a href="User/password.html">Forgot your password?</a>
    			<button>Sign In</button>
    		</form>
    	</div>
    	<div class="overlay-container">
    		<div class="overlay">
    			<div class="overlay-panel overlay-left">
    				<h1>Welcome Back!</h1>
    				<p>If you are New to Us , Sign Up and stay Connected with Us ! </p>
    				<button class="ghost" id="signIn"> Sign In</button>
    			</div>
    			<div class="overlay-panel overlay-right">
    				<h1>Hello, Friend!</h1>
    				<p>Enter your personal details and feel freely to pay your Challan here </p>
    				<button class="ghost" id="signUp"> Sign Up</button>
    			</div>
    		</div>
    	</div>
    </div>
  </div>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
container.classList.remove("right-panel-active");
});
</script>






  </body>
</html>
