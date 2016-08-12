<?php
require_once('vendor/autoload.php');

use \Firebase\JWT\JWT;

/* decode the jwt using the key from config */

$jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE0NzA5NzI2MzIsImp0aSI6IjJlU0xja2QyU1ZGSVwva0lPZjZMTWZMRjliaUNEUW1XSCt6MEFoZ3FrRXRNPSIsImlzcyI6Ind3dy5jb2xsZWdlc3Rhc2guY29tIiwibmJmIjoxNDcwOTcyNjQyLCJleHAiOjE0NzA5NzI5NDIsImRhdGEiOnsidXNlcklkIjoxMDI5LCJ1c2VyTmFtZSI6IlNoaXZhIn19.EE2sIZ3lf02chtW8IP3pIYtk2UO6IZcGwKcklNCoVTQPtW1wP7C9s_5S0n8zgkl8jbX4obiuTqb_MjxaFVCyew';
$config = new Zend\Config\Config(include 'config/config.php');

$secretKey = base64_decode($config->get('jwtKey'));

$token = JWT::decode($jwt, $secretKey, array('HS512'));

print_r($token);

/*
$request = new Request();
if ($request->isGet()) { //Will only process HTTP GET requests.
	$authHeader = $request->getHeader('authorization');

Now let’s find out if the authorization header has a JWT string in it:
Look for the 'authorization' header

if ($authHeader) {
     Extract the JWT from the Bearer
    list($jwt) = sscanf( $authHeader->toString(), 'Authorization: Bearer %s');
    // MORE CODE
}
*/