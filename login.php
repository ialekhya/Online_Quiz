<!DOCTYPE html>
<html>
   <head>
   	<title>loginpage</title>
   	 <link rel="stylesheet" href="loginstyle.css">
   </head>

   <body>
   	    <div class="loginbox">
   	   	<form   method="POST">
   	   		<?php include('logincheck.php'); ?>
   	   		<img class="avt-image" src="avt1.png">
   	   		<h1>LOGIN</h1>
			<p>
				<label>Username</label><br>
			    <input type="text" id="user" name="userr">
			</p>
			<p>
				<label>Password</label><br>
			    <input type="password" id="pass" name="passs" >
			</p>
			<p>
				 <label> <input type="checkbox" checked="checked" name="remember"> Remember me</label>
		    </p>
			<p >
				<input type="submit" id="login" value="login">
			</p>
			<a href="forgotpsw.php">Forgot password</a><br>
			<a href="register.php">Don't have an account</a>
		</form>
	</div>
</body>