<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('sql204.unaux.com', 'unaux_26963898', 'h3sy36pfs11i660', 'unaux_26963898_havi');
if(isset($_POST['submit']))
{
    if(!empty($_POST['ite']))
    {
        echo "ITEM SUBMITTED SUCCESSFULLY";
    }
}
?>