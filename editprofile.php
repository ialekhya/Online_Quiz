
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
<h1 class="ds">FILL DETAILS</h1>
 <br><br>
  <form  method="POST">
          <?php include('edit.php'); ?>
          <p>
        <label>firstname</label><br>
          <input type="text" id="firstname" value=<?php echo $row['firstname'] ?> name="firstname">
      </p>
          <p>
        <label>lastname</label><br>
          <input type="text" id="lastname" value=<?php echo $row['lastname'] ?>  name="lastname">
      </p>
      <p>Gender<br>
        <input type="radio" name="gender" id="male" value="male" >
                <label for="male">Male</label><br>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label><br>  
           </p>
      <p>
        <label>Institute</label><br>
          <input type="text" id="institute" value=<?php echo $row['institute'] ?> name="institute">
      </p>
      <p>
        <label>Contact no</label><br>
          <input type="text" id="contactno" value=<?php echo $row['contactno'] ?> name="contactno">
      </p>
  
      <p >
        <input type="submit" id="btn" value="update">
      </p>
  </form>      
</div>

</body>
</html>