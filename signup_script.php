<?php 
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header("Location: index.php");
    }

    if(isset($_POST['submit'])){
        $mysqli = new mysqli("localhost", "root", "", "store");
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        
        $email = $mysqli->real_escape_string(trim($_POST['email']));
        $password = md5($mysqli->real_escape_string(trim($_POST['password'])));
        $name = trim($_POST['name']);
        $contact = trim($_POST['contact']);
        $city = trim($_POST['city']);
        $address = trim($_POST['address']);

        $sql = "INSERT INTO users ('email', 'password', 'name', 'contact', 'city', 'address')". 
                'VALUES ('.$email.','.$password.','.$name.','.$contact.','.$city.','.$address.')';
        
        $mysqli->query($sql);
        /*
        if(!$mysqli->query($sql)){
            printf("Error: %s\n", $mysqli->sqlstate);
        }
        
        if($mysqli->affected_rows === 1){
            $error_msg = 'Login with your credentials to continue';
            $_SESSION['msg'] = $error_msg; 
            $mysqli->close();
            header("Location: login.php");
        } 
        else {
            echo "\tSomething wrong";
            $mysqli->close();
        } */
    }
    else echo 'Not submited';
?>