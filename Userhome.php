<html>
<head>
<title></title>
 <link rel="stylesheet" type="text/css" href="bootstrap.css">
 <style> 
body {
  background-image: url("pattern.jpg");
  background-repeat: repeat;
  background-color: #cccccc;
}
</style>
</head>
<body>  
<h2>USER DETAILS</h2> <a href="logout.php">LOGOUT </a>   
  <form action="formstore.php" method="post">
  <div>
  Name: <input type="text" name="name" placeholder="name">
  <br><br>
  Nationality: 
  <input type="radio" name="nationality" value="indian">Indian
  <input type="radio" name="nationality"  value="other">Other
    <br><br>
  E-mail: <input type="email" name="email1" >
  <br><br>
  DOB: <input type="date" name="date1" value="2019-04-6">
  <br><br>
  Height(in cms): <input type="number" name="height" min="156" step="1" >
    <br><br>
  Weight: <input type="number" name="weight" min="45" step="0.1">
    <br><br>
   Physicalfitness(OTA on scale 1-10): <input type="number" name="fitness" min="1" max="10" step="1" >
    <br><br>
   Qualification:
  <input type="radio" name="qual"  value="school">School(10-12)th
  <input type="radio" name="qual" value="graduation">Graduation
  <input type="radio" name="qual"  value="postgrad">PostGraduation 
    <br><br>
  Name of the Institution:<input type="text" name="institution" >
    <br><br>
  CGPA(Graduation's): <input type="number" name="cgpa" min="6" max="10" step="0.01" >
    <br><br>
  NDA score:<input type="number" name="nda" min="90" max="300" step="1" >
  <br><br>
  CDSE/NCC score:<input type="number" name="cdse" min="110" max="300" step="1" >
  <br><br>
  State the reason why you want to join Indian Airforce: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender" value="other">Other  
    <br><br>
  <input type="submit" name="submit" value="Submit">  
</div>
</form>
</body>
</html>

