<?php 
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header("Location: index.php");
    }

    if(isset($_POST['submit'])){
        
        $email = trim($_POST['email']);
        $password = md5(trim($_POST['password']));
        $name = trim($_POST['name']);
        $contact = trim($_POST['contact']);
        $city = trim($_POST['city']);
        $address = trim($_POST['address']);

        try{
            $dbh = new PDO('mysql:host=localhost;dbname=store', 'root', '', array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => true,
            PDO::ERRMODE_EXCEPTION => true
            ));
            
            $stmt = $dbh->prepare("INSERT INTO users (email, password, name, contact, city, address) VALUES (:email, :password, :name, :contact, :city, :address)");
    
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':contact', $contact);
            $stmt->bindParam(':city', $contact);
            $stmt->bindParam(':address', $address);
                
            $stmt->execute();
            $stmt = null; // doing this is mandatory for connection to get closed
            $dbh = null;
            $_SESSION['msg'] = 'User created succefully';
            header("Location: login.php");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
    }
    else header("Location: index.php");
?>