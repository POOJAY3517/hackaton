<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" placeholder="name" >
      </div>
      <div class="input-group">
  	  <label>Date of Birth</label>
  	  <input type="date" name="date" placeholder="DOB" style="background-color=white">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email" placeholder="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="text" name="password_1" placeholder="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="text" name="password_2" placeholder="comfirm">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>