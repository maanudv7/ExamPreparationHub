<?php
 //  include "logout.php";
	session_start();
    include "connection.php";
    
	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}

include "Ehead.php";

if(isset($_REQUEST["btn"])){
  $file=$_FILES["f"]["name"];
  $tmp_name=$_FILES["f"]["tmp_name"];
  $path="upload/".$file;
  move_uploaded_file($tmp_name, $path);
$q = "insert into pdf (file) values ('$file')";
mysqli_query($conn, $q) or die(mysqli_error($conn));

}

?>

<!DOCTYPE html>
<html>
 <head>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
      <title>PDFs</title>
      <style>
      	.aba{
      		margin-top: 3%;
      		color:red;
      	}
      </style>
  </head>
  <body>
  	<br><br>
  	  <center class="aba">You can also contibute by uploading the useful documents so others can also benefit.  </center>
   <h3 style="margin-left: 30px">Aptitude PDFs</h3>
   <?php
   include 'connection.php';
   $q=" SELECT * from pdf";
   $result = mysqli_query($conn, $q)or die($mysqli_error($conn));
   $rowc=mysqli_num_rows($result);
    ?>

  
      <h3 style="margin-left: 30px">Download </h3><br>

 <ol style="margin-left: 30px" >
   
    
<?php
for($i=1;$i<=$rowc;$i++){

  $row=mysqli_fetch_array($result);
  ?>

 
  <li><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?> </a></li>

<?php 
} 
?>
</ol>
<br>
<hr>

    <form style="margin-left: 30px" method="post"  enctype="multipart/form-data">
       	<input type="file" name="f">
   <br>    	<button name="btn">Upload</button>
   </form>


  </body>
  </html>