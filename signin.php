<?php
    function validate(){

    
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $databasename = 'leisure';

        //connection to the database

        $connection = mysqli_connect($servername, $username, $password, $databasename);
                    
        //chech if connection was successful

        if(!$connection){
            die('Connection unsuccessful :' .mysqli_connect_error());
        }else{
            echo 'Connection success!';
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = mysqli_query($connection,"SELECT * FROM customers where (cus_email='$email' and cus_password='md5($password)')");
        $row = $sql->fetch_assoc();
        if($sql)
        {
            $_SESSION["ID"] = $row['cus_id'];
            $_SESSION["Email"]=$row['cus_email'];
            $_SESSION["First_Name"]=$row['cus_name'];
            $_SESSION["Phone_No"]=$row['cus_phone']; 
            header("Location: pagefour.php"); 
        }
        else
        {
            echo "Invalid Email ID/Password";
         }
  

    }
    if(isset($_POST['submit'])){
        validate();
    }
?>