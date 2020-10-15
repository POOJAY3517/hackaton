<?php 
 
  session_start(); 
  $username = "";
  $email    = "";
  $errors = array(); 
  
  // connect to the database
  $db = mysqli_connect('sql204.unaux.com', 'unaux_26963898', 'h3sy36pfs11i660', 'unaux_26963898_havi');
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: adminlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: adminlogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></br>
        <?php
        $query=mysqli_query($db,"select * from users");
        while($row=mysqli_fetch_array($query))
    {
        echo $row['username'];
        ?><br><?php
    }
    ?>
    	<br><br><p> <a href="adminindex.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>