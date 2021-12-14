<?php include('partials/navbar.php') ;?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Car</h1>

        <br /><br />

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/add-car.php" class="btn-primary">Add Car</a>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Create a SQL Query to Get all the cars
                        $sql = "SELECT * FROM tbl_car";

                        //Execute the query
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have cars or not
                        $count = mysqli_num_rows($res);

                        //Create Serial Number Variable and Set Default Value as 1
                        $id=1;

                        if($count>0)
                        {
                            //We have car in Database
                            //Get the cars from Database and Display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
                                $id = $row['id'];
                                $title = $row['title'];
                                $price = $row['price'];
                                $image_name = $row['image_name'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                                ?>

                                <tr>
                                    <td><?php echo $id; ?>. </td>
                                    <td><?php echo $title; ?></td>
                                    <td>$<?php echo $price; ?></td>
                                    <td>
                                        <?php  
                                            //CHeck whether we have image or not
                                            if($image_name=="")
                                            {
                                                //WE do not have image, DIslpay Error Message
                                                echo "Image not Added.";
                                            }
                                            else
                                            {
                                                //WE Have Image, Display Image
                                                ?>
                                                <img src="<?php echo SITEURL; ?>images/car/<?php echo $image_name; ?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $featured; ?></td>
                                    <td><?php echo $active; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-car.php?id=<?php echo $id; ?>" class="btn-secondary">Update Car</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-car.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Car</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //Car not Added in Database
                            echo "Car not added yet..";
                        }

                    ?>

                    
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>