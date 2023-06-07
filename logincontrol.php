<?php
session_start();
include 'dbconnection.php';
    if(isset($_POST['email']) && isset($_POST['pass'])){
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email']);
        $pass = validate($_POST['pass']);

        // $user_data = 'email='.$email;
        // echo $user_data;
        if(empty($email)){
            header("Location: login.php?error=Email is required");
            exit();
        }
        else if(empty($pass)){
            header("Location: login.php?error=Password is required");
            exit();
        }
         //set login attempt if not set
         if(!isset($_SESSION['attempt'])){
            $_SESSION['attempt'] = 0;
        }
 
        //check if there are 3 attempts already
        if($_SESSION['attempt'] == 3){
            header("Location: login.php?btnerror=Plsease wait 10 mins.");
        }
        else{
            
            $sql = "select * from customer where email='$email'";
            $result = mysqli_query($connection,$sql);
            
            if(mysqli_num_rows($result)>0){
                 $row = mysqli_fetch_assoc($result);
                 $verify = password_verify($pass, $row['password']);
                    if($verify==1){
                        $_SESSION['email']=$row['email'];
                        // $_SESSION['name']=$row['name'];
                        // $_SESSION['id']=$row['id'];
                        echo('Successfully Login');
                        header("Location:index.php?");
                        unset($_SESSION['attempt']);
                        // exit();
                    }
                    else{
                        header("Location: login.php?error=Incorrect Email and Password");
                        //this is where we put our 3 attempt limit
                        $_SESSION['attempt'] += 1;
                        //set the time to allow login if third attempt is reach
                         if($_SESSION['attempt'] == 3){
                        $_SESSION['attempt_again'] = time() + (10*60);
                        header("Location: login.php?btnerror=Plsease wait 10 mins.");          
                        }
                    }       
            }
            else{
                header("Location: login.php?error=User is not found");
                exit();
            }
        }
        }
        else{
            header("Location:login.php");
            exit();
        }
    ?>