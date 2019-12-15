<?php
 $con=mysqli_connect('localhost','root','','studentdb');
 $errors=array();
 if(isset($_POST['firstname'])&& isset($_POST['lastname']) && isset($_POST['emaill']) && isset($_POST['gender']) &&
    isset($_POST['institute']) && isset($_POST['contactno']) && isset($_POST['userr']) && isset($_POST['passs']))
 {
   $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
   $emailidd = mysqli_real_escape_string($con, $_POST['emaill']);
   $gender = mysqli_real_escape_string($con, $_POST['gender']);
   $institute = mysqli_real_escape_string($con, $_POST['institute']);
   $contactno = mysqli_real_escape_string($con, $_POST['contactno']);
   $usernamee = mysqli_real_escape_string($con, $_POST['userr']);
   $passwordd = mysqli_real_escape_string($con, $_POST['passs']);
   $cpasswordd = mysqli_real_escape_string($con, $_POST['cpasss']);
  if(empty($firstname)|| empty($lastname)|| empty($usernamee) || empty($passwordd) || empty($emailidd) || empty($gender) || empty($institute) || empty($contactno) || empty($cpasswordd))
     array_push($errors, "Fill all details ");
  if(count($errors)==0)
  {

  	  $check1=mysqli_query($con,"select * from profile where username='$usernamee' and password='$passwordd'");
  	  $check1_rows=mysqli_num_rows($check1);
  	  if($check1_rows>0)
  	  	 array_push($errors, "Already exists a user with login credentials");

  	  $check2=mysqli_query($con,"select * from profile where emailid='$emailidd'");
  	  $check2_rows=mysqli_num_rows($check2);
  	  if($check2_rows>0)
  	  	 array_push($errors, "Already exists such a mailid");

  	  	if(!filter_var($emailidd, FILTER_VALIDATE_EMAIL))
             array_push($errors, "Invalid mail");

         if($cpasswordd!=$passwordd)
              array_push($errors, "wrong confirmation password");

          if(!validate_phone_number($contactno))
             array_push($errors, "Invalid Phoneno");
  	   if(count($errors)==0)
  	   {
        $sq="select max(userid) as maxid from profile";
     $rr=mysqli_query($con,$sq)  or die("query failed".mysqli_error($con));
        $row1=mysqli_fetch_array($rr);
     $useridd=$row1['maxid'];
     $useridd++;
     

  $sq="insert into profile (userid,firstname ,lastname ,emailid ,gender ,institute ,contactno ,username ,password ) values ('$useridd','$firstname','$lastname','$emailidd','$gender','$institute','$contactno','$usernamee', '$passwordd')";
    $result=mysqli_query($con,$sq)
           or die("query failed".mysqli_error($con)); 

       $sq="insert into mock(userid,teststaken,testsqualified,totalscore,highscore )
                     values ('$useridd','0','0','0','0')";
          $result=mysqli_query($con,$sq)or die("query failed".mysqli_error($con)); 

        $sq="insert into gk(userid,teststaken,testsqualified,totalscore,highscore ) 
                         values ('$useridd','0','0','0','0')";
          $result=mysqli_query($con,$sq) or die("query failed".mysqli_error($con)); 

          $sq="insert into technical(userid,teststaken,testsqualified,totalscore,highscore ) 
                                    values ('$useridd','0','0','0','0')";
           $result=mysqli_query($con,$sq) or die("query failed".mysqli_error($con)); 

           $sq="insert into logical(userid,teststaken,testsqualified,totalscore,highscore ) 
                         values ('$useridd','0','0','0','0')";
          $result=mysqli_query($con,$sq) or die("query failed".mysqli_error($con)); 

         header("location:login.php");
       }

  }
       if(count($errors)>0)
  {
     foreach($errors as $error)
     {
      echo '<span style="color:#BB8FCE;">' . $error . '<br> </span>';
     }
}
}
function validate_phone_number($phone)
{
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
}
 ?>