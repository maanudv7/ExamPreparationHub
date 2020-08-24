<?php
 //  include "logout.php";
	session_start();
    include "connection.php";
    
	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>
<!doctype html>
<html lang="en">
<head>
	
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
	<title>Logged In</title></head>
<body>
<?php 
include "Ehead.php";
?>


<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-3">
			<img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
		</div>

		<div class="col-md-9">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td>ID</td>
						<td><?php echo $_SESSION['id'] ?></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><?php echo $_SESSION['givenName'] ?></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><?php echo $_SESSION['familyName'] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email'] ?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $_SESSION['gender'] ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div="container">
          <form style="margin-left: 650px" action="logout.php">
					<button type="submit" class="btn btn-danger">Logout</button>
		 </form>	
</div>


<?php
    
      $b=$_SESSION['givenName'];
      $c=$_SESSION['familyName'];
      $d=$_SESSION['email'];
      $e=$_SESSION['gender'];
      $f=$_SESSION['picture'];
    

$upq = "Select * from user where Email='$d'";
$upr = mysqli_query($conn,$upq);
$total= mysqli_num_rows($upr);
if($total!=0){
 echo "Old User";
}
else{
	echo "New user";
$user_registration_query = "insert into user(Fname,Lname,Email,Gender,Picture) values ('$b','$c','$d','$e','$f')";
$user_registration_submit = mysqli_query($conn, $user_registration_query) or die(mysqli_error($conn));
}

    /* 	 $query="INSERT INTO user VALUES('$a','$b','$c','$d','$e','$f')";
         $data=mysqli_query($conn,$query);
      if($data){
	echo "data has been successfully entered";
} 
else
{ die("connection failed because ".mysqli_connect_error());} */
?>


		


</body>
</html>