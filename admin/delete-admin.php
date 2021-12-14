<?php 
 //Include constants.php file here
 include('../config/constants.php');

    // 1. get the ID of Admin to be deleted
  echo $id = $_GET['id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    //Execute the Query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($res==true)
    {
        //Query Executed Successully and Admin Deleted
       // echo "Admin Deleted";
       //Create SEssion Variable to Display Message
       $_SESSION['delete'] = "Admin Deleted Successfully";
        //Redirect to Manage Admin Page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //Failed to Delete Admin
       // echo "Failed to Delete Admin";
       $_SESSION['delete'] = "Failed to Delete Admin. Please try again ";
       header('location:'.SITEURL.'admin/manage-admin.php');

    }

?>