<?php



    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']) || empty($_POST['password']) )
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
     

             $query = " insert into login (login_id,username,password) values('','$username','$password')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("record added");
            }
            else
            {
                echo 'Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:../html/login.html");
    }



?>