
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
<?php include("profilesidenav.php");?>
<div class="main">
 <h1 class="details">MY PROFILE</h1>
 <br><br>
 <table class="table1">
      <tr>
        <td>First Name</td>
        <td><?php echo $row['firstname'] ?></td>
      </tr>
       <tr>
        <td>Last Name</td>
        <td><?php echo $row['lastname'] ?></td>
      </tr>
       <tr>
        <td>Email Id</td>
        <td><?php echo $row['emailid'] ?></td>
      </tr>
      </tr>
       <tr>
        <td>Gender</td>
        <td><?php echo $row['gender'] ?></td>
      </tr>
      </tr>
       <tr>
        <td>Institute</td>
        <td><?php echo $row['institute'] ?></td>
      </tr>
      </tr>
       <tr>
        <td>Contact</td>
        <td><?php echo $row['contactno'] ?></td>
      </tr>
     
     </table>
</div>

</body>
</html>