<?php
     $con=mysqli_connect('localhost','root','','studentdb');
     $user=$_SESSION['username'];
    $mail=$_SESSION['emailidd'];
   if(isset($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['institute']) ||
      isset($_POST['gender']) || isset($_POST['contactno']) )
    {
   $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
   $gender = mysqli_real_escape_string($con, $_POST['gender']);
   $institute = mysqli_real_escape_string($con, $_POST['institute']);
   $contactno = mysqli_real_escape_string($con, $_POST['contactno']);
    $sql="update profile set firstname='$firstname',lastname='$lastname',
    gender='$gender',institute='$institute',contactno='$contactno'  where username='$user' and emailid='$mail'";
    $result=mysqli_query($con,$sql)  or die("query failed".mysqli_error($con));  
     }
        
  ?>