<?php 
    //Include Constants Page
    include('../config/constants.php');

    //echo "Delete car Page";

    if(isset($_GET['id']) && isset($_GET['image_name'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        //echo "Process to Delete";

        //1.  Get ID and Image NAme
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //2. Remove the Image if Available
        //CHeck whether the image is available or not and Delete only if available
        if($image_name != "")
        {
            // IT has image and need to remove from folder
            //Get the Image Path
            $path = "../images/car/".$image_name;

            //Remove Image File from Folder
            $remove = unlink($path);

            //Check whether the image is removed or not
            if($remove==false)
            {
                //Failed to Remove image
                $_SESSION['upload'] = "Failed to Remove Image File.";
                //REdirect to Manage Car
                header('location:'.SITEURL.'admin/manage-car.php');
                //Stop the Process of Deleting car
                die();
            }

        }

        //3. Delete car from Database
        $sql = "DELETE FROM tbl_car WHERE id=$id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //CHeck whether the query executed or not and set the session message respectively
        //4. Redirect to Manage car with Session Message
        if($res==true)
        {
            //Food Deleted
            $_SESSION['delete'] = "Car Deleted Successfully.";
            header('location:'.SITEURL.'admin/manage-car.php');
        }
        else
        {
            //Failed to Delete car
            $_SESSION['delete'] = "Failed to Delete Car.";
            header('location:'.SITEURL.'admin/manage-car.php');
        }

        

    }
    else
    {
        //Redirect to Manage car Page
        //echo "Redirect";
        $_SESSION['unauthorize'] = "Unauthorized Access.";
        header('location:'.SITEURL.'admin/manage-car.php');
    }

?>
