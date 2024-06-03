<?php

    require_once("dbconf.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['categories']) || empty($_POST['address']) || empty($_POST['pickup_date']) || empty($_POST['pickup_time']) || empty($_POST['return_date'])  || empty($_POST['return_time'])  || empty($_POST['days']) )
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $categories = $_POST['categories'];
            $address = $_POST['address'];
            $pickup_date = $_POST['pickup_date'];
			$pickup_time = $_POST['pickup_time'];
            $return_date = $_POST['return_date'];
            $return_time = $_POST['return_time'];
			$days = $_POST['days'];

            $query = " insert into booking (booking_id,categories,address,pickup_date,pickup_time,return_date,return_time,days) values('','$categories','$address','$pickup_date','$pickup_time','$return_date','$return_time','$days')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:booking_view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:../html/booking.html");
    }



?>