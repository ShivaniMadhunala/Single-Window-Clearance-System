<?php
$name = $_POST['name'];
//$pass = $_POST['password1'];
$nat = $_POST['nationality'];
$email= $_POST['email1'];
$date = $_POST['date1'];
$ht= $_POST['height'];
$wt= $_POST['weight'];
$pf= $_POST['fitness'];
$qual= $_POST['qual'];
$institute= $_POST['institution'];
$cgpa= $_POST['cgpa'];
$nda= $_POST['nda'];
$cdse= $_POST['cdse'];
$comm= $_POST['comment'];
$gender= $_POST['gender'];
$host="localhost";
$dbuname="root";
$dbpass="";
$dbname="sessionpractical";
$conn=new mysqli($host,$dbuname,$dbpass,$dbname);
$qy = " insert into formdetails(name,nationality,email,date,height,weight,fitness,qual,institution,cgpa,nda,cdse,comment,gender) values('$name','$nat','$email','$date',$ht,$wt,$pf,'$qual','$institute',$cgpa,$nda,$cdse,'$comm','$gender')";
	$stmt=$conn->prepare($qy);
$stmt->bind_param('ssssiiissiiiss',$name,$nat,$email,$date,$ht,$wt,$pf,$qual,$institute,$cgpa,$nda,$cdse,$comm,$gender);
	$stmt->execute();
	echo "record inserted successfully";
	$stmt->close();
	$conn->close();
?>
