
<!DOCTYPE html>
<html>
   <head>
   	<title>registerpage</title>
   	 <link rel="stylesheet" href="registerstyle.css">
   </head>

   <body>
   	    <div class="registerbox">
   	 
   	    <form  method="POST">
   	   		<?php include('registererror.php'); ?>
   	   		<h1 style="color:red;">SIGN UP</h1>
   	   		<p>
				<label>firstname</label><br>
			    <input type="text" id="firstname" name="firstname">
			</p>
   	   		<p>
				<label>lastname</label><br>
			    <input type="text" id="lastname" name="lastname">
			</p>
			<p>
				<label>Emailid</label><br>
			    <input type="email" id="emaill" name="emaill">
			</p>
			<p>Gender<br>
				<input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label><br>  
           </p>
			<p>
				<label>Institute</label><br>
			    <input type="text" id="institute" name="institute">
			</p>
			<p>
				<label>Contact no</label><br>
			    <input type="text" id="contactno" name="contactno">
			</p>
			<p>
				<label>Enter Username</label><br>
			    <input type="text" id="user" name="userr">
			</p>
			<p>
				<label>Enter Password</label><br>
			    <input type="password" id="pass" name="passs" >
			</p>
		     <p>
				<label>Confirm password</label><br>
			    <input type="password" id="cpass" name="cpasss" >
			</p>

			<p >
				<input type="submit" id="btn" value="Register">
			</p>
			<a href="login.php"> Already a member?? sign in </a>
		</form>
		
	</div>
