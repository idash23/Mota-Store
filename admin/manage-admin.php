<?php include('partials/navbar.php') ;?>

<!-- Menu Section Starts  -->
<div class="main-content">
<div class="wrapper">
    <h1>Manage Admin</h1>

    <br />

    <?php
    // used when we have successfully added,updated &deleted users and we redirect to manage page admin
    if (isset($_SESSION['add']))
    {
        echo $_SESSION['add']; // displaying session message
        unset ($_SESSION['add']); // removing session message
    }

    if(isset($_SESSION['delete']))
    {
        echo $_SESSION['delete']; // displaying session message
        unset ($_SESSION['delete']); // removing session message
    }
    if(isset($_SESSION['update']))
    {
        echo $_SESSION['update']; // displaying session message
        unset ($_SESSION['update']); // removing session message
    }

    if(isset($_SESSION['user-not-found']))
    {
        echo $_SESSION['user-not-found'];
        unset($_SESSION['user-not-found']);
    }

    if(isset($_SESSION['pwd-not-match']))
    {
        echo $_SESSION['pwd-not-match'];
        unset($_SESSION['pwd-not-match']);
    }

    if(isset($_SESSION['change-pwd']))
    {
        echo $_SESSION['change-pwd'];
        unset($_SESSION['change-pwd']);
    }

    ?>
    <br></br><br>

<!-- Button to Add Admin -->
<a href="add-admin.php" class="btn-primary">Add Admin</a>

<br /><br /><br />

<table class="tbl-full">
    <tr>
        <th>AdminID</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Actions</th>
    </tr>

    <?php 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM tbl_admin";
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);
                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {

                            // Count Rows to Check whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database
                               
                            $id=1; // create variable and assign the value

                            //check num  of rows
                            if($count>0)
                            {
                                 //we have data
                                 while($rows=mysqli_fetch_assoc($res))
                                 {
                                     //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //get individual data
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    //Display the Values in our Table
                                    ?>

                                    <tr>
                                        <td><?php echo $id; ?>. </td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                        <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                        </td>
                                    </tr>

                                    <?php


                                 }
                            }
                            else
                            {
                                //we dont have data
                            }

                        }
                        

?>

</table>

</div>
</div>
<!-- Main Content Setion Ends -->

<?php include('partials/footer.php'); ?>

