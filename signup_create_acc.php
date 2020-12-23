<?php

    //create record function

    function createRecord()
    {

        $serverName = 'localhost';
        $userName = 'root';
        $password = '';
        $databaseName = 'leisure';

        //connection to the database

        $connection = mysqli_connect($serverName, $userName, $password, $databaseName);

        //checking whether connecting to the server was successful or not

        if(!$connection){
            die('Connection unsuccessful :' .mysqli_connect_error());
        }else{
            echo 'Connection success!';
        }

        //storing user inputs into variables

        $customerName = $_POST['cus_name'];
        $customerEmail = $_POST['cus_email'];
        $customerPhone = $_POST['cus_phone'];
        $customerPassword = $_POST['cus_password'];


        
        
        //attempting to insert data
        $sql = "INSERT INTO customers (cus_name, cus_email, cus_phone, cus_password ) VALUES ('$customerName','$customerEmail','$customerPhone','$customerPassword')";

        //checking if insering data was successful

        if(mysqli_query($connection, $sql)){
            echo 'Success Inserted Data';

        }
        else{
            echo 'Error:'.$sql.mysqli_error($connection);
            echo'<script>alert("This record already exists try logging in or signing up with another email account!")</script>';
        }
        //close connection

        mysqli_close($connection);

        //redirecting the user to the main page index.php

        header('location:payment.php');

        
        

        
        
    }

    if(isset($_POST['move_forward-button'])){
        createRecord();
    }
?>

