<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'C:\xampp\htdocs\phpdoc\google-api-php-client-2.2.1\vendor\autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('327271723835-ou8dprls4tof1er9a99sc897fr918ovt.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('f Jbsysx5p-fmx8Xb86gghID1');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/phpdoc/minor%20project/E-Challan/sign_in.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page


?>
