<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.hero-image {
  background-image: url("scrum.png");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 1100px 550px;
  position: relative;
}
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
</style>
</head>  
<body>
 <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">SPORTS FOR THE RURAL</h1>
    <h2> </h2>
         <a href="something.php">Don't have an Acccount? Click here to Create.</a>
  </div>
</div>
  <div class="container">
    <div class="row">
    <div class="col-lg-6">
        <h2> Login </h2>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label> UserName </label>
            <input type="text" name="user" class="form-control">
          </div>
          <div class="form-group">
            <label> Password </label>
            <input type="Password" name="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
                  </form>
        
      </div>
       <div class="col-lg-6">
        <h2> Login As Officer </h2>
        <form action="validofficer.php" method="post">
          <div class="form-group">
            <label> UserName </label>
            <input type="text" name="user" class="form-control">
          </div>
          <div class="form-group">
            <label> Password </label>
            <input type="Password" name="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
               </form>
              </div>
    </div>
</div>
 </body>
</html>
