<?php 

    //Authorization of Access Control
    //Check whether the user is logged in or not
    if(!isset($_SESSION['user'])) //If user session is not set
    {
        //User is not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "Please login to access Admin Panel";
        //Redirect to Login Page
        header('location:'.SITEURL.'admin/login.php');
    }

?>