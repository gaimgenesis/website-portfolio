<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />

<link rel="stylesheet" type="text/css" href="css/logo.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
<link rel="stylesheet" type="text/css" href="css/home.css" />
<link rel="stylesheet" type="text/css" href="css/loader.css"/>
<script type="text/javascript" src="js/header.js"></script>
<link rel="stylesheet" type="text/css" href="css/snow.css" id="snowflakecss"/>
<script type="text/javascript" src="js/snow.js"></script>
<link rel="stylesheet" type="text/css" href="css/intro.css" />
<script type="text/javascript" src="js/intro.js"></script>
<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
<link rel="stylesheet" type="text/css" href="css/test.css" />

<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<title>About Me</title>

<style>
/* clash with bootstrap component tag, use embed to override it */
body{
margin: 0;
background: #f7f7f7;
color: black;
font-family: 'Montserrat', sans-serif; 
overflow-x: hidden;
overflow-y: scroll;
}

#fonts{
  font-family: OCR A Std, monospace;
}

#grad {
  background: rgb(247,247,247);
  background: linear-gradient(180deg, rgba(247,247,247,1) 0%, rgba(230,255,155,1) 100%, rgba(0,212,255,1) 100%);
}
.about {
  border-radius: 15px;
  background-color: #f2f2f2;
  padding: 50px;
}
img {
  margin-right: 100px;
  border: 5px solid;
}
h1,h2 {
  font-weight: bold;
}

p {
  font-size: 16px;
  color: #cdcdcd;
}
#paragraph{
  color: black;
  display: block;
  font-size: 30px;
  text-align: center;
}
/*apply to all elements */
* {
  box-sizing: border-box;
}
/*style the nav bar */
.navbar-inverse {
  background: #2E2F31;
  border: 0;
}
.navbar-inverse .navbar-nav li a {
  color: #f7f7f7;
  font-size: 16px;
}
.navbar-inverse .navbar-nav li a:hover {
  color: #CC0000;
  font-size: 20px;
}

.navbar-inverse .navbar-nav li button {
  color: #f7f7f7;
  background-color: Transparent;
  border: none;
  line-height: 3.0;
  font-size: 16px;
}
.navbar-inverse .navbar-nav li button:hover {
  color: #CC0000;
  background-color: Transparent;
  border: none;
  font-size: 20px;
}

</style>
</head>

<body>
<!--- header ----->
<?php 

include 'template/header.php';

?>

<!--------------About Me----------------->
<div class="style fade-in"><h1 style="text-align: center;" id="fonts">About Me</h1></div>
<div class="about" id="grad">
<br/>
<p id="paragraph">
<table class="style fade-in" id="fonts">
  <tr>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td><img src="images/pic1.jpg" width="400" height="500" left="500" border="5"></td>
    <td style="font-size: 30px; padding-bottom: 10px; line-height: 1.8;"><strong>Name: </strong>Ng Kean Ping<br/>
    <strong>DOB: </strong>28th May 1999<br/>
    <strong>Studies: </strong>Bachelor Degree in Software Engineering<br/>
    <strong>University: </strong>Asia Pacific University of Innovation and Technology (APU)<br/>
    <strong>Contact Info:</strong> Refer below! </td>
  </tr>
</table></p>
</div>
<!--------------Footer ----------------->
<?php 
include_once 'template/footer.php';
?>


<!--------------/footer------------------>


</body>

</html>