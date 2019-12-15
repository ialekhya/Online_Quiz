<?php
 $con=mysqli_connect('localhost','root','','studentdb');
 $errors=array();
 if(isset($_POST['userr']) && isset($_POST['emailid']))
 {
   $usernamee = mysqli_real_escape_string($con, $_POST['userr']);
   $emailid = mysqli_real_escape_string($con, $_POST['emailid']);
   if(empty($usernamee) || empty($emailid))
    array_push($errors,"Fill all details");
  else
  {
       $result=mysqli_query($con,"select * from profile where username='$usernamee' and emailid='$emailid'")
                                    or die("query failed".mysqli_error($con));
        $row=mysqli_fetch_array($result);
       if($row['username']==$usernamee && $row['emailid']==$emailid)
       { 
           $passwordd=$row['password'];
           echo "password is ".$passwordd;
           echo '<a href="login.php"> click here to login </a>';
         }
       else
       array_push($errors,"No such username or mailid");
   }
   
  if(count($errors)>0)
  {
     foreach($errors as $error)
     {
      echo '<span style="color:#BB8FCE;">' . $error . '<br> </span>';
     }
      /*   $msg="";
     foreach($errors as $error)
     {
        $msg=$msg.$error."\n";
      }
    echo "<script type='text/javascript'>
            alert('$msg');
            </script>";*/
    }

}
?>