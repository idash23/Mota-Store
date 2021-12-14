<?php include('partials/navbar.php') ;?> 

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br><br>

        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?>

  

        <br><br>

        <!-- Add Category Form Starts -->
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Category Title">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes 
                        <input type="radio" name="featured" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes 
                        <input type="radio" name="active" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
        <!-- Add Category Form Ends -->
        <?php 
        
        //Check whether the Submit Button is Clicked or Not
        if(isset($_POST['submit']))
        {
           // used to check if button was clicked or not echo "Clicked";
            //1. Get the Value from Category Form
            $title = $_POST['title'];

             //For Radio input, we need to check whether the button is selected or not
             if(isset($_POST['featured']))
             {
                 //Get the VAlue from form
                 $featured = $_POST['featured'];
             }
             else
             {
                 //SEt the Default VAlue
                 $featured = "No";
             }

    
        if(isset($_POST['active']))
        {
            $active = $_POST['active'];
        }
        else
        {
            $active = "No";
        
        }
        //Check whether the image is selected or not and set the value for image name 

        if(isset($_FILES['image']['name']))
        {
            //upload the image
             //To upload image we need image name, source path and destination path
             $image_name = $_FILES['image']['name'];


             //auto rename our images we get $ext
             //Get the Extension of our image (jpg, png, gif, etc) e.g. "specialcar1.jpg"
             $ext = end(explode('.', $image_name));

            //Rename the Image
             $image_name = "Car_Category_".rand(000, 999).'.'.$ext; // e.g. Car_Category_834.jpg
                        
            

             $source_path = $_FILES['image']['tmp_name'];


             $destination_path = "../images/category/".$image_name;


        // then we upload the image
        $upload = move_uploaded_file($source_path, $destination_path);
       //Check whether the image is uploaded or not
       //And if the image is not uploaded then we will stop the process and redirect with error message
         if($upload==false)
         {
              //set message
              $_SESSION['upload'] = "Failed to Upload Image.";

              // redirect to add category page
              header('location:'.SITEURL.'admin/add-category.php');

              //stop the process
              die();

          }
    
         }
        else 
         {
            //dont upload
            $image_name="";

         }
      

          //2. Create SQL Query to Insert Category into Database
                $sql = "INSERT INTO tbl_category SET 
                    title='$title',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active'
                ";

                //3. Execute the Query and Save in Database
                $res = mysqli_query($conn, $sql);

                 //4. Check whether the query executed or not and data added or not
                 if($res==true)
                 {
                     //Query Executed and Category Added
                     $_SESSION['add'] = "Category Added Successfully";
                  }
                          //Redirect to Manage Category Page
             header('location:'.SITEURL.'admin/manage-category.php');
                  }
                  else 
                  {
                      // failed to add

                  }
                

            ?>
              
    </div>
</div>

<?php include('partials/footer.php'); ?>