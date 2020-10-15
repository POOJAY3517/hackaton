<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db1 = mysqli_connect('sql204.unaux.com', 'unaux_26963898', 'h3sy36pfs11i660', 'unaux_26963898_havi');
if(isset($_POST['submit']))
{
    if(!empty($_POST['di']))
    {
        $di=$_POST['di'];
        $query="insert into items(item) values ('$di')";
        $run=mysqli_query($db1,$query);
        if($run)
        echo "ITEM SUBMITTED SUCCESSFULLY";
    }
    else
    echo "All fields required";
}
?>