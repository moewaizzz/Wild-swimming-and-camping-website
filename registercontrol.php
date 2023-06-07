<?php
session_start();
include 'dbconnection.php';
    if(isset($_POST['username']) && isset($_POST['email'])
    && isset($_POST['pass'] ) && isset($_POST['cpass'])){
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $username = validate($_POST['username']);
        $email = validate($_POST['email']);
        $pass = validate($_POST['pass']);
        // $repass = validate($_POST['[repass]']);
        $cpass = validate($_POST['cpass']);
      


        $user_data = 'username='.$username.'&email='.$email;
        // echo $user_data;
        if(empty($username)){
            header("Location: register.php?error=User Name is required&$user_data");
            exit();
        }
        else if(empty($email)){
            header("Location: register.php?error=Email is required&$user_data");
            exit();
        }
        else if(empty($pass)){
            header("Location: register.php?error=Password is required&$user_data");
            exit();
        }
        else if(empty($cpass)){
            header("Location: register.php?error=Password is required&$user_data");
            exit();
        }
        else if($pass != $cpass)
        {
            header("Location: register.php?error=Password is not match&$user_data");
            exit();
        }
        else{
            $e_pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
            $sql = "Select * from customer where email='$email' ";
            $result = mysqli_query($connection,$sql);
            if(mysqli_num_rows($result)>0){
                header("Location: register.php?error=Account using this email is already created&$user_data");
                exit();
            }
            else{
                $sql2 = "Insert into customer(customername,email,password) 
                values('$username','$email','$e_pass')";
                $result2 = mysqli_query($connection,$sql2);
                if($result2){
                    header("Location:login.php?");
                    exit();
                }
                else{
                    header("Location: register.php?error=Unknown error occour&$user_data");
                    exit();
                }
            }
        }
    }
        else{
            header("Location:register.php");
            exit();
        }
    
    ?>