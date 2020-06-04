<?php
    session_start();

    $is_logged = isset($_SESSION['username']);
    $username = "";
    $password = "";
    $email = "";
    $errors = array();

    $server = "localhost";
    $server_user = "gau";
    $server_password = "gau123";
    $dbname = "cartrade";

    $con = mysqli_connect($server, $server_user, $server_password, $dbname);

    // Register
    if(isset($_POST['register'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
        
        if(empty($username)){
            array_push($errors, "Username is required");
        }
        if(strlen($username) < 3 && strlen($username) > 16){
            array_push($errors, "Username must be between 3 and 16 characters");
        }
        if(empty($email)){
            array_push($errors, "Email is required");
        }
        if(empty($password_1)){
            array_push($errors, "Password is required");
        }
        if(strlen($password_1) < 4 && strlen($password_1) > 16){
            array_push($errors, "password must be between 4 and 16 characters");
        }
        
        if($password_1 != $password_2){
            array_push($errors, "Password don't match");
        }

        // Add user into database
        if(count($errors) == 0){
            $password = md5($password_1);
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($con, $query);

            if($result){
                $_SESSION['username'] = $username;
                header('location: index.php');
            } else {
                array_push($errors, "The username or password is incorrect");
            }
       }

    }

    // Log in user
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        
        if(empty($username)){
            array_push($errors, "Username is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($con, $query);
            
            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                header('location: index.php');
            } else {
                array_push($errors, "The username or password is incorrect");
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