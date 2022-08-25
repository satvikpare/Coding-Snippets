<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '38099248191-91o2e3q5kgkek463halmhnkkpelad7eq.apps.googleusercontent.com'; //Google client ID
$clientSecret = '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'; //Goo/pr.php'; //Callback URL
$redirectURL = 'https://codingsnippets.000webhostapp.com/signin.php'; //Callback URL
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>