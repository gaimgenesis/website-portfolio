<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/generale-station" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css" />
<link rel="stylesheet" type="text/css" href="css/home.css" />
<link rel="stylesheet" type="text/css" href="css/loader.css"/>
<script type="text/javascript" src="js/header.js"></script>
<link rel="stylesheet" type="text/css" href="css/snow.css" id="snowflakecss"/>
<script type="text/javascript" src="js/snow.js"></script>
<link rel="stylesheet" type="text/css" href="css/slideshow.css" />

<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

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

p {
  font-size: 16px;
  color: #cdcdcd;
}
#grad{
  background: rgb(247,247,247);
  background: linear-gradient(180deg, rgba(247,247,247,1) 0%, rgba(188,254,254,1) 76%, rgba(102,249,220,1) 100%);
  font-family: 'GeneraleStationRegular';
  font-weight: normal;
  font-style: normal;
}
/*apply to all elements */

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

<title>Gallery</title>
</head>


<body>
<!--- header ----->
<?php 

include_once 'template/header.php';

?>

<!----/header ---->
<div id="grad"><h1 style="text-align: center">Gallery</h1>
<h3 style="text-align: center">A showcase of my hobbies and past works</h3><br/><br/>
<?php

include_once 'slides.php';

?>
</div>

<!----footer---->

<?php  
include_once 'template/footer.php';
?>

<!----/footer---->

</body>

</html>
