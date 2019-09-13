<?php
session_start();
$con = mysqli_connect('localhost','root','','sessionpractical');
if($con){
   echo"\n";
}else{
   echo "no connection";
}
$blahblah=$_SESSION['username'];
$q = " select * from formdetails where name='$blahblah'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
  if (mysqli_num_rows($result) > 0) {
  	$row = mysqli_fetch_assoc($result);
  	if(($row["manager1"]==1 && $row["manager2"]==0) || ($row["manager1"]==0 && $row["manager2"]==1) || ($row["manager1"]==0 && $row["manager2"]==0))
  	{
  		echo "\n STILL UNDER VERIFICATION PROCESS.";
  	}else{
  		if(($row["manager1"]==1 && $row["manager2"]==2) || ($row["manager1"]==2 && $row["manager2"]==1) || ($row["manager1"]==2 && $row["manager2"]==0) || ($row["manager1"]==0 && $row["manager2"]==2) || ($row["manager1"]==2 && $row["manager2"]==2)) 
     {
        echo "\n SORRY! YOU'RE NOT SELECTED.BETTER LUCK NEXT TIME!!";
     }
  	}
    if($row["manager1"]==1 && $row["manager2"]==1){
    	echo "\n CONGRATS!! YOU'RE SELECTED .";
    }
  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
   <img src="smiley1.jpg" width="50" height="50">
  </body>
  </html>

