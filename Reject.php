<?php
session_start();
$con = mysqli_connect('localhost','root','','sessionpractical');
if($con){
   echo" connection successful \n";
}else{
   echo "no connection";
}
$blah=$_SESSION['textname'];
if($_SESSION['username']=='Manager1')
{
    $qy = " UPDATE formdetails SET manager1 = 2 WHERE name='".$blah."' ";
    mysqli_query($con, $qy);
    echo "\n Sucessfully updated.";
}
else{
if($_SESSION['username']=='Manager2')
{
    $qy = " UPDATE formdetails SET manager2 = 2 WHERE name='".$blah."' ";
    mysqli_query($con, $qy);
    echo "\n Sucessfully updated.";
}
}
?>

