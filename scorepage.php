<?php 
  session_start();
   $testtype=$_SESSION['testtype'];
 $con=mysqli_connect('localhost','root','','studentdb');
           $useridd=$_SESSION['userid'];
         $sq="select * from $testtype where userid='$useridd' ";
     $rr=mysqli_query($con,$sq)  or die("query failed".mysqli_error($con));
        $row1=mysqli_fetch_array($rr);

        if($row1['highscore']<$_SESSION['score'])
          $highscore=$_SESSION['score'];
        else
           $highscore=$row1['highscore'];

      $score=$_SESSION['score'];

      $qualify=$row1['testsqualified'];
      if($_SESSION['score']>=5)
      $qualify=$row1['testsqualified']+1;


       $sql="update $testtype set highscore='$highscore',teststaken=teststaken+1,testsqualified='$qualify',totalscore=totalscore+$score where userid='$useridd'";
       mysqli_query($con,$sql);
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
      <link rel="stylesheet" href="teststyle.css">
</head>

<body>
  <?php include("navigationbar.php");?>
    <div class="mainbox">
      <h1 style="margin-left:100px;"><?php echo  $_SESSION['qualified'] ?> </h1>
      <br>
     <table class="table2">
      <tr>
        <td>Testtype</td>
        <td><?php echo $_SESSION['test'] ?></td>
      </tr>
      <tr>
        <td>Total No.of questions </td>
        <td>30</td>
      </tr>
      <tr>
        <td>No.of questions attempted</td>
        <td><?php echo $_SESSION['attempted'] ?></td>
      </tr>
     <tr>
        <td>Total Score</td>
        <td><?php echo $_SESSION['score'] ?></td>
      </tr>
     </table><br><br>
     <div style="margin-left:200px">
    <form action="scorepage.php" method="POST"> 
    <input type="radio" name="feedback" id="excellent" value="excellent ">
    <label for="excellent">Excellent</label>
    <input type="radio" name="feedback" id="good" value="good ">
    <label for="good">Good</label>  
    <input type="radio" name="feedback" id="average" value="average ">
    <label for="average">Average</label> 
    <input type="radio" name="feedback" id="bad" value="bad">
    <label for="bad">Bad</label>
    </form>
    </div>  

    <br>

      <div style="float:left;margin-left:200px;">
      <form action="testtype.php">
      <input type="submit" id="btn" style="width:150px;" value="Take Another test">
       </form>
           <form action="logout.php"> <input type="submit" id="btn" style="width:150px;" value="Logout"></form>
         </div>
</div>
</div>