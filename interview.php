<?php
session_start();
    include "connection.php";
    
  if (!isset($_SESSION['access_token'])) {
    header('Location: login.php');
    exit();
  }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
          <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Placement Preparation | Interview</title>
<style>
        select{
          color: blue; height: 35px; width: 100%;
        }
 
.dropdo {
    position: relative;
    display: inline-block;
}

.dropdo-con {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdo:hover .dropdo-con {
    display: block;
}

.vl {
    border-left: 6px solid black;
    margin-top: 70px;
    height: 800px;
    position: absolute;
    left: 40%;
    margin-left: -3px;
    top: 0;
}

</style>
 </head>
  <body>
  	 <?php 
     include "Ehead.php";
     ?>
  	   <!-- <div class="container">
                <div class="navbar-header" style="margin-left: 100px">
               <h1 style="color:white;">Exam Preparation Online   <a href = "index.php" style="color: white; margin-left: 500px;" ><span class = "glyphicon glyphicon-user"></span> Profile</a></h1>
   <div class="navbar">
               <a href="task2.php" >Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Placement 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
   <a href="index.php">Profile</a>
            </div>
 -->
<div class="container">   
     <div class="col-md-4" style="background-color:#D3D3D3; margin-left: 30px; padding-bottom: 30px; margin-top: 70px;" >
          <p style="padding-left: 30%">Apply Filter</p>

       <div class="dropdo" align="center">
  <span><i class="glyphicon glyphicon-envelope"></i></span>
  <div class="dropdo-con">
    <p>Select any option from dropdown and apply filter.</p>
  </div>
  </div>
             	<h2>Organisation:</h2>
        
<form action="interview.php" method="post">
                <select name="value1">
  <option value="Default">Select anyone</option>
  <option value="Microsoft">Microsoft</option>
  <option value="Red Bull Renault">Red Bull Renault</option>
  <option value="Tcs">Tcs</option>
  <option value="Google">Google</option>
  <option value="Facebook">Facebook</option>
</select>

<br>
<h2>Engineering Stream:</h2>
             	
                <select name="value2">
  <option value="2">Select anyone</option>
  <option value="Computer Science">Computer Science</option>
  <option value="IT">IT</option>
  <option value="Mechanical">Mechanical</option>
</select>
<br>
<h2>Application Mode:</h2>
             	 <select name="value3">
  <option value="3">Select anyone</option>
  <option value="Online">Online</option>
  <option value="Offline">Offline</option>
</select>
<input type="submit" name="search" value="Filter">
</form>
<br>
<br>
<hr style="outline-color: white; ">

  <a href="#" style="padding-left: 30%">Clear All/Select All</a>

<form>
    <div class="checkbox">
      <label><input type="checkbox" value="">Selection Procedure</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Technical Interview</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Analytical Questions</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">HR Questions</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Suggestions</label>
    </div>
  </form>

</div>

<?php 
include "connection.php";
if(isset($_POST['search'])){
  $v1=$_POST['value1'];
  $v2=$_POST['value2'];
  $v3=$_POST['value3'];
    $upq = "Select * from filter where org='$v1' OR Branch='$v2' OR mode='$v3'";
    $upr = mysqli_query($conn,$upq);
  
?>

 
 <!-- <div class="vl"></div>
-->
 <div class="col-md-7" style="background-color:white;  margin-left: 30px; margin-top: 70px;" >
 	<?php
   echo "<h1>Interview Experiences::  ".$v1."</h1>";?>
  <?php
//include "task2.php";

    while($result=mysqli_fetch_assoc($upr)){
    echo "<div class='form-group'>
      <textarea readonly rows='10' cols='100' name='comment' >
        \nOrg: ".$result['org']."\nBranch: ".$result['Branch']."\nLocation: ".$result['location']."\nApplication Mode: ".$result['mode']."\nInterview: ".$result['inter']."\nSuggestions: ".$result['sug']."</textarea>
    </div>";
}
}
?>
</div>
    
</div>

  </body>
  </html>