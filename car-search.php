
<?php include('partials-front/navbar.php'); ?>

<? include('..config/constants.php'); ?>

<!-- Car search Section Starts Here -->
<section class="car-search text-center">
    <div class="container">
        <?php 

            //Get the Search Keyword
            // $search = $_POST['search'];
            $search = mysqli_real_escape_string($conn, $_POST['search']);
        
        ?>


        <h2>Cars on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

    </div>
</section>
<!-- Car SEARCH Section Ends Here -->



<!-- Car Section Starts Here -->
<section class="car-menu">
    <div class="container">
        <h2 class="text-center"> </h2>

        <?php 

            //SQL Query to Get cars based on search keyword
            //$search = burger '; DROP database name;
            // "SELECT * FROM tbl_car WHERE title LIKE '%Benz'%' OR description LIKE '%benz%'";
            $sql = "SELECT * FROM tbl_car WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Count Rows
            $count = mysqli_num_rows($res);

            //Check whether car available of not
            if($count>0)
            {
                //Car Available
                while($row=mysqli_fetch_assoc($res))
                {
                    //Get the details
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="car-menu-box">
                        <div class="car-menu-img">
                            <?php 
                                // Check whether image name is available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not Available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/car/<?php echo $image_name; ?>" alt=" " class="img-responsive img-curve">
                                    <?php 

                                }
                            ?>
                            
                        </div>

                        <div class="car-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="car-price">$<?php echo $price; ?></p>
                            <p class="car-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Car Not Available
                echo "<div class='error'>Car not found.</div>";
            }
        
        ?>

        

        <div class="clearfix"></div>

        

    </div>

</section>
<!-- Car Section Ends Here -->

<?php include('partials-front/footer.php'); ?>