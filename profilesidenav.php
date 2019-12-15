<?php
   session_start();
    $con=mysqli_connect('localhost','root','','studentdb');
     $user=$_SESSION['username'];
      $mail=$_SESSION['emailidd'];
      $useridd=$_SESSION['userid'];
       $result=mysqli_query($con,"select * from profile where userid='$useridd'") 
                    or die("query failed".mysqli_error($con));
         $row=mysqli_fetch_array($result);


     $result=mysqli_query($con,"select * from mock where userid='$useridd'") 
                    or die("query failed".mysqli_error($con));
         $mock=mysqli_fetch_array($result);

     $result=mysqli_query($con,"select * from logical where userid='$useridd'") 
                    or die("query failed".mysqli_error($con));
         $logical=mysqli_fetch_array($result);

     $result=mysqli_query($con,"select * from gk where userid='$useridd'") 
                    or die("query failed".mysqli_error($con));
         $gk=mysqli_fetch_array($result);


    $result=mysqli_query($con,"select * from technical where userid='$useridd'") 
                    or die("query failed".mysqli_error($con));
         $technical=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="profilestyle.css">
</head>



<body>
  <script src="logout.js"></script>
<div class="sidenav" >
   <img src="avt.png" width="150px" style="margin-left:90px;">
    <br><br>
    <div class="hh">
      <p style="margin-left:120px;"><?php echo $_SESSION['username'] ?></p>
 <p><span class="glyphicon glyphicon-earphone" style="margin-left:30px;"><?php echo "91-" .$row['contactno'] ?></span></p> 
   <p><span class="glyphicon glyphicon-envelope" style="margin-left:30px;"><?php echo $row['emailid'] ?></span></p> 
    </div><br>

    <a href="profilep.php"><span class="glyphicon glyphicon-eye-open"> ViewProfile</span></a>
    <a  href="editprofile.php"><span class="glyphicon glyphicon-pencil"> EditProfile</span></a>   
     <a href="testscores.php"><span class="glyphicon glyphicon-education"> Testscore</span></a>
    <a href="logout.php"  onclick="return deleteask();"><span class="glyphicon glyphicon-log-out">  Logout</span></a>
 </div>
</body>
</html>