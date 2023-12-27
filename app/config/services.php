<?php
require $_SERVER['DOCUMENT_ROOT'].'/tschuyen/api/vendor/autoload.php';

# Add your client ID and Secret
$client_id = "749642091947-jr0s8d3crrrskah72761vtgqp13h65o3.apps.googleusercontent.com";
$client_secret = "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";

$client = new Google\Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);

# redirection location is the path to login.php
$redirect_uri = 'http://https://ndchien254.000webhostapp.com/login.php';
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");
?>