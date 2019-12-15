<!DOCTYPE.html>
<html>
<head>
       <link rel="stylesheet" href="teststyle.css">
</head>
<body>
 <?php include("nextquestion.php");?>
    <p>No.of Questions: 30<br>
    Questions Attempted:<?php echo $_SESSION['attempted'] ?><br> </p>
   
    <div class="que">
    <br>Question No: <?php echo $_SESSION['questions'] ?>
    <p><?php echo $row['question'] ?></p>
    <?php $act="<script>document.write(mobileFormReady);</script>";?>
    <form action="<?php echo $act;?>" method="POST">
    <input type="radio" name="option" value="<?php echo $row['optiona'] ?>"><?php echo $row['optiona'] ?><br>
    <input type="radio" name="option" value="<?php echo $row['optionb'] ?>"><?php echo $row['optionb'] ?><br>
    <input type="radio" name="option" value="<?php echo $row['optionc'] ?>"><?php echo $row['optionc'] ?><br>
    <input type="radio" name="option" value="<?php echo $row['optiond'] ?>"><?php echo $row['optiond'] ?><br> 
    <br><br><br>
    <div class="buttons">
        <input type="submit" name="submitt" value="submit">
        <input type="submit" name="next" value="next">
      </form>
    </div>

      <script src="timer.js"></script>  
    <script type="text/javascript">
    document.getElementById('timer').innerHTML = 00 + ":" + 30;
    startTimer();
    </script>
</body>