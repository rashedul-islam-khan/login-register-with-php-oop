<?php 
   $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/Session.php';
    Session::init();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Register System PHP</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<script type="text/javascript" src="inc/jquery.min.js"></script>
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>
</head>
<?php 
  if (isset($_GET['action']) && $_GET['action'] == "logout") {
    Session::destroy();
  }
?>
<body>
<div class="container">
   	  <nav class='navbar navbar-default'>
      	  	<div class="container-fluid">
         	  		<div class="navbar-header">
         	  			<a class="navbar-brand" href="index.php">Login Register System PHP & PDO</a>
         	  		</div>
         	  		<ul class="nav navbar-nav pull-right">
         	  			<li><a href="profile.php">Profile</a></li>
         	  			<li><a href="?action=logout">Logout</a></li>
         	  			<li><a href="login.php">Login</a></li>
         	  			<li><a href="register.php">Register</a></li>
         	  		</ul>
      	  	</div>
   	  </nav>