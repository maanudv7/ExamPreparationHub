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
        
      <title>Home</title>
      <style>
      
  
      ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
      }

      ul li {
        float: left;
     background-color: black;
     text-align: center;
    width:150px;
     font-size: 20px;
     height: 40px;
     opacity: .9;
      }
      ul li a{
    color: #D3D3D3;
    padding: 10px 12px;
    text-decoration: none;
    display: block;
    text-align: left;
      }

     ul li a:hover{
      background-color: red;
      text-decoration: none;
      color: grey;
     }
     ul li ul li{
       display: none;
         }
   ul li:hover ul li{
       display: block;
      }

    ul li ul li ul li{
      margin-left: 150px;
      margin-top: -50px;
      margin-bottom: 50px;
      display: none;
    }
    ul li ul li a:hover{
      background-color: green;   
    }
  ul li ul li ul li a:hover{background-color: blue;}
  ul li:hover ul li ul li{
       display: none;
      }

  ul li ul li:hover ul li{
       display: block;
      }
    
  .a{
    float: right;
    margin-top: -20px;
  } 
  .b{
    margin-left: 75px;
  }   
/*  
.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #425;
}

.dropdown:hover .dropdown-content {
    display: block;
}
*/
      </style>
 </head>
  <body>
<!--
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
</div>

-->
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:black; height: 40px;">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Placement Preparation</a>
    </div>
    <ul>
      
      <li><a href="interview.php">Interview</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Placements</a>
    
    <ul>
      <li><a href="test.php">Test Series</a>
      <ul>
        <li><a href="practice.php">Practice</a></li>
        <li><a href="exam.php">Exam</a></li>
      </ul>
      </li>
      <li><a href="ques.php">Questions</a></li>
      <li><a href="docs.php">Documents</a></li>
    </ul>
  </li>
  
<form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group" style="margin-left: 200px;">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>


  <li class="b"><a href="about.php">About Us</li>
 

  <li class="a"><a href="#"><span class="glyphicon glyphicon-triangle-bottom"></span>Profile</a>
    <ul>
      <li><a href="profile.php">Details</a></li>
      <li><a href="#">Performance</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
    </ul>
    </li>

</ul>
  
 </div>
</div>
</body>
</html>