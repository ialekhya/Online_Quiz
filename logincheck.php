<?php
 $con=mysqli_connect('localhost','root','','studentdb');
 $errors=array();
 if(isset($_POST['userr']) && isset($_POST['passs']))
 {
   $usernamee = mysqli_real_escape_string($con, $_POST['userr']);
   $passwordd = mysqli_real_escape_string($con, $_POST['passs']);
   $usernamee=stripslashes($usernamee);
   $passwordd=stripslashes($passwordd);
   if(empty($usernamee) || empty($passwordd))
    array_push($errors,"Fill all details");
  else
  {
       $result=mysqli_query($con,"select * from profile where username='$usernamee' and password='$passwordd'")
                                    or die("query failed".mysqli_error($con));
                                    
        $row=mysqli_fetch_array($result);
       if($row['username']==$usernamee && $row['password']==$passwordd)
       { 
            session_start();
           $_SESSION["login"]="true";
           $msg="location:";
           $msg=$msg.$_SESSION['page'];
           $_SESSION['userid']=$row['userid'];
           $_SESSION['username'] = $usernamee;
          $_SESSION['emailidd']=$row['emailid'];
            header($msg);
         }
       else
       array_push($errors,"Incorrect username/password try again");
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