<?php
session_start();
$con = mysqli_connect('localhost','root','','sessionpractical');
if($con){
   echo "DETAILS OF THE APPLICANT:\n";
}else{
   echo "no connection";
}
//mysqli_select_db($con, 'sessionpractical');
$comments = $_POST['typename'];
$_SESSION['textname'] = $comments;
// echo $comments;
$q = " select * from formdetails where name='".$comments."'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
  if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))
  {
               echo "Name: " . $row['name']."<br>";
                echo "Nationality: ".$row["nationality"]."<br>";
               echo "EmailID : " . $row["email"]."<br>";
               echo "Date Of Birth : " . $row["date"]."<br>";
               echo "Height : " . $row["height"]."<br>";
               echo "Weight : " . $row["weight"]."<br>";
               echo "Fitness (OTA on scale 1-10) : " . $row["fitness"]."<br>";
               echo "Qualification : " . $row["qual"]."<br>";
               echo "Name of the Institution : " . $row["institution"]."<br>";
               echo "CGPA : " . $row["cgpa"]."<br>";
               echo "NDA score : " . $row["nda"]."<br>";
               echo "CDSE score : " . $row["cdse"]."<br>";
               echo "Reason behind the interest in joining the Academy : " . $row["comment"]."<br>";
               echo "Gender : " . $row["gender"]."<br><br><br>";
                          }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
    <form action="approve.php">
       <button type="submit" class="btn btn-primary">Approve</button>
    </form>
    <form action="reject.php">
       <button type="submit" class="btn btn-primary">Reject</button>
    </form>
</body>
</html>

