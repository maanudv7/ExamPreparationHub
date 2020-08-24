<?php
session_start();
require_once "GoogleApi/vendor/autoload.php";
$gClient=new Google_Client();
$gClient->setClientId("255280094683-abhsmq3albag7b0te4rjac8orkdbk630.apps.googleusercontent.com");
$gClient->setClientSecret("S_Lafm65XtDARK2nVz8--YAy");
$gClient->setApplicationName("Appsignin");
$gClient->setRedirectUri("http://localhost/task/call.php");
 $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>