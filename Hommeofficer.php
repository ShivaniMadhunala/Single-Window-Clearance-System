<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.hero-image {
  background-image: url("welcomepic.png");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: repeat;
  background-size: 1200px 550px;
  position: relative;
}
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>
</head>  
</head>
<body>
  <div class="hero-image">
  <div class="hero-text">
  <h2 class="text-center text-success" style="color:white">Welcome <?php echo $_SESSION['username']; ?> </h2>
</div>
</div>
 <a href="approvingpage.php">LOGIN AS OFFICER TO APPROVE THE USER RESUME</a>
</body>
</html>
