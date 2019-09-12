<!DOCTYPE html>
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
<?php
$host="localhost";
$dbuname="root";
$dbpass="";
$dbname="sessionpractical";
$conn=new mysqli($host,$dbuname,$dbpass,$dbname);
	$qy = "select * from formdetails ";
	$result = mysqli_query($conn, $qy);
          echo "REGISTERED USERS ARE:\n";
          echo "          ";
         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo " ". $row["name"]."<br>";
            }
         } else {
            echo "0 results";
         }  
 mysqli_close($conn);       
?>

         <form action="detaildisplay.php" method="post">
            <label>Enter the username you want to Approve:</label><br>
         <input type="text" cols="255" rows="1" name="typename" id="para1"/ >
                  <br>
          <button type="submit" class="btn btn-primary">SUBMIT</button>
          </form>
   </body>
</html>

