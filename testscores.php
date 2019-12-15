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
     <h1 class="ds">Test Scores</h1>
 <br><br>
     <table class="table2">
      <tr>
          <th>Test type</th>
        <th>No.of tests taken</th>
         <th>Test qualified</th>
         <th>Total score</th>
         <th>Highest score</th>
      </tr>
      <tr>
        <td>logical</td>
        <td><?php echo $logical['teststaken'] ?></td>
        <td><?php echo $logical['testsqualified'] ?></td>
        <td><?php echo $logical['totalscore'] ?></td>
        <td><?php echo $logical['highscore'] ?></td> 
      </tr>
      <tr>
        <td>General Knowledge</td>
        <td><?php echo $gk['teststaken'] ?></td>
        <td><?php echo $gk['testsqualified'] ?></td>
        <td><?php echo $gk['totalscore'] ?></td>
        <td><?php echo $gk['highscore'] ?></td> 
      </tr>
      <tr>
        <td>Technical</td>
        <td><?php echo $technical['teststaken'] ?></td>
        <td><?php echo $technical['testsqualified'] ?></td>
        <td><?php echo $technical['totalscore'] ?></td>
        <td><?php echo $technical['highscore'] ?></td> 
      </tr>
     <tr>
        <td>Mock test</td>
        <td><?php echo $mock['teststaken'] ?></td>
        <td><?php echo $technical['testsqualified'] ?></td>
        <td><?php echo $technical['totalscore'] ?></td>
        <td><?php echo $technical['highscore'] ?></td> 
      </tr>
     </table>
</div>
</div>