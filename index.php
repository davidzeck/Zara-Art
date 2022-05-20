<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>LOGIN FORM</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
	<form id="login" action="login.php" method="POST">
	  <div class= "txt_field">
	    <input type="text" name="email" required>
		<span></span>
		<label>Email Address</label>
	  </div>
	   <div class= "txt_field">
	    <input type="password" name="password" required>
		<span></span>
		<label>Password</label>
	  </div>
	  <input type="submit" value="Login">
	  <div class="signup_link">
	     Don't have an account? <a href="#">Sign_up</a>
	  </div>
	  </form>
  </div>
</body>