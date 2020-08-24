<?php
ob_start();
error_reporting(0);
$con = mysqli_connect("localhost", "id6879265_manudv7", "Football7", "id6879265_ecom") or die(mysqli_error($con));
if(!isset($_SESSION))
session_start();
ob_end_flush();
?>