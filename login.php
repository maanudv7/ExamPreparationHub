<?php
require_once "config.php";

/*	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	} */
$loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
	<title>Login </title>
	<style>
		#banner_img{
       padding-top: 75px;
       padding-bottom: 50px;
       text-align: center; 
       color: #fff; 
       background: url(exam.jpg) no-repeat center center;
       background-size: cover; 
}
#banner_content{
    position: relative; 
    padding-top: 6%; 
    padding-bottom: 6%; 
    margin-top: 12%;
    margin-left: 300px; 
    margin-bottom: 12%; 
    background-color: rgba(0, 0, 0, 0.7); 
    max-width: 660px; 
}

	</style>
</head>
<body>
<div id="banner_img">
            <div class="container">
                <center>
                <div id="banner_content" class="col-md-6 col-offset-6">
                     <h1>Online Exam Preparation</h1>
                     <br>
                         <form action="task2.php">
					<input pattern="email" name="email" class="form-control"><br>
                     
					<input type="password" placeholder="Enter your password" name="pwd" class="form-control"> <br>

				<!--	<input type="submit" value="Login" class="btn btn-primary"> -->
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Login with Google" class="btn btn-danger">
				</form>   
                          
                     
                </div>
               </center>
            </div>
        </div>
       
       <!-- <div class="container" style="margin-top: 200px ">
		<div class="row justify-content-center">
			<div class="col-md-4 col-offset-8" >
				<h3>Exam preparation online</h3>
				<form>
					<input pattern="email" name="email" class="form-control"><br>
                     
					<input type="password" placeholder="Enter your password" name="pwd" class="form-control"> <br>

					<input type="submit" value="Login" class="btn btn-primary">
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Login with Google" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>


-->

	</body>
</html>