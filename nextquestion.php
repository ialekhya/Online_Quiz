<?php 
  $con=mysqli_connect('localhost','root','','questionpaperdb');
   $test=$_SESSION['test'];
   $qidd=$_SESSION['queid'];
    $_SESSION['questions']++;
  
   if( $_SESSION['questions']<=10)
   { 
        $sql="select * from $test where qid='$qidd' ";
        $result=mysqli_query($con,$sql) or die("query failed".mysqli_error($con));
        $row=mysqli_fetch_array($result);
        $_SESSION['correctoption']=$row['correctoption'];
        $_SESSION['queid']++;
   }
   else
   {
   	   if($_SESSION['score']>=5)
   	   	$_SESSION['qualified']="Congratulations ".$_SESSION['username']. ", you are qualified";
   	   else
   	   	$_SESSION['qualified']="Sorry ".$_SESSION['username']. ", you are unqualified";

       	header("location:scorepage.php");
   }
 ?>