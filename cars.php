
<?php include('config/constants.php'); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Mota Exotic Cars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="car-buy.php">Buy <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="car-rent.php">Rent</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="order.php">Orders</a>
</li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light"></span>
                </a>
            </form>
        </div>
    </div>
</nav>


<!--  Car list Section Starts Here -->
<section class="car-menu">
    <div class="container">
     
        <p> </p>
    <h2 class="jumbotron-heading">Cars in our inventory
    </h2>
    <p> </p>
    </p>

        <?php 
            //Display Cars that are Active
            $sql = "SELECT * FROM tbl_car WHERE active='Yes'";

            //Execute the Query
            $res=mysqli_query($conn, $sql);

            //Count Rows
            $count = mysqli_num_rows($res);

            //CHeck whether the Cars are available or not
            if($count>0)
            {
                //Cars Available
                while($row=mysqli_fetch_assoc($res))
                {
                    //Get the Values
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
                    ?>
                    
                    <div class="car-menu-box">
                        <div class="car-menu-img">
                            <?php 
                                //CHeck whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not Available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                   
                                    <p> </p>
                             <div class="card">
                           <img src="<?php echo SITEURL; ?>images/car/<?php echo $image_name; ?>" img class="card-img-top" alt="Card image cap">
                             <div class="card-body">
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

                            <a href="<?php echo SITEURL; ?>order.php?car_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Car not Available
                echo "<div class='error'>No available cars in our database inventory. Check Again later. We sincerely apologize.</div>";
            }
        ?>

        


        <div class="clearfix"></div>

        

    </div>

</section>
<!-- Car section Ends Here -->

<?php include('partials-front/footer.php'); ?>