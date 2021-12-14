
<?php include('partials-front/navbar.php'); ?>
<?php include('config/constants.php'); ?>


<br> <br> 
<!-- CAR SEARCH Section Starts Here -->
<section class="car-search">
    <div class="container">
        <br> <br>

        <h2 class="text-center text-black">Fill this form to confirm your order.</h2>

        <form action="" method="POST" class="order">
            <fieldset>
                <legend>Selected Car</legend>

                <div class="car-menu-img">
                  
                
                    
                </div>

                <div class="car-menu-desc">
                    <h3></h3>
                    <input type="hidden" name="car" value="<?php echo $title; ?>">

                    <p class="car-price" ></p>
                    <input type="hidden" name="price" value="<?php echo $price; ?>">

                    <div class="order-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>
                    
                </div>

            </fieldset>
            
            <fieldset>
                <legend>Delivery Details</legend>
                <div class="order-label">Full Name</div>
                <input type="text" name="full-name" placeholder="E.g. Cliford Charuka" class="input-responsive" required>

                <div class="order-label">Phone Number</div>
                <input type="tel" name="contact" placeholder="E.g. 405xxxxxx" class="input-responsive" required>

                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="E.g. user@gmail.com" class="input-responsive" required>

                <div class="order-label">Address</div>
                <textarea name="address" rows="10" placeholder="E.g. Street, City, State" class="input-responsive" required></textarea>

                <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
            </fieldset>

        </form>

       

    </div>
</section>
<!-- Car SEARCH Section Ends Here -->

<?php include('partials-front/footer.php'); ?>