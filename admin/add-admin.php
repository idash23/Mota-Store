<?php

use function PHPSTORM_META\elementType;

include('partials/navbar.php') ;?>



<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add'])) //Checking whether the Session is set of not
            {
                echo $_SESSION['add']; //Display the Session Message if Set
                unset($_SESSION['add']); //Remove Session Message
            }
        ?>

        <form action="" method="POST"> 

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Full Name">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter Your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Enter Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>

<?php include('partials/footer.php'); ?>


<?php 
    //Process the value from form and save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit'])) 
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        // add echo to check if it is obtaining info from the form eg  echo $username = $_POST['username']; 
    
        $full_name = $_POST['full_name'];
       $username = $_POST['username'];  
       $password = md5($_POST['password']); //Password Encryption with MD5

         //2. SQL Query to Save the data into database
         $sql = "INSERT INTO tbl_admin SET 
         full_name ='$full_name',
         username='$username',
            password='$password' 
    
         "; 
       //3. Executing Query and Saving Data into Database
       $res = mysqli_query($conn, $sql) or die(mysqli_error());

       //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
       if($res==TRUE)
       {
           //Data Inserted
         //  echo "Data Inserted";
         $_SESSION['add'] = "Admin Added Successfully";

     //Redirect Page to Manage Admin
      header("location:".SITEURL.'admin/manage-admin.php');

       }
       else 
       {
           // failed to insert data
         //  echo "failed to insert data";
         $_SESSION['add'] = "Failed to add Admin";

         //Redirect Page to Manage Admin
          header("location:".SITEURL.'admin/manage-admin.php');
       }
           
    
    }
    
?>