<?php
    session_start();
    date_default_timezone_set('Asia/Tbilisi');

    $is_logged = isset($_SESSION['username']);
    $username = "";
    $password = "";
    $email = "";
    $errors = array();

    $server = "localhost";
    $server_user = "gau";
    $server_password = "gau123";
    $dbname = "vacancy";

    $con = mysqli_connect($server, $server_user, $server_password, $dbname);


    if(isset($_POST['login'])){
        $companyname = mysqli_real_escape_string($con, $_POST['companyname']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        
        if(empty($companyname)){
            array_push($errors, "Company Name is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0){
            $query = "SELECT * FROM company WHERE companyname='$companyname' AND password='$password'";
            $result = mysqli_query($con, $query);
            
            if(mysqli_num_rows($result) == 1){
                $_SESSION['companyname'] = $companyname;
                header('location: company.php');
                echo $_SESSION['companyname'];
            } else {
                array_push($errors, "The company name or password is incorrect");
            }
        }
    }


    //Logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }
?>