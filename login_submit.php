<?php 
    require 'includes/common.php';
    if(isset($_POST['submit'])){
        $user_email = trim($_POST['email']);
        $password = md5(trim($_POST['password']));
        try{
            $dbh = new PDO('mysql:host=localhost;dbname=store', 'root', '', array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => true,
            PDO::ERRMODE_EXCEPTION => true
            ));
            
            $stmt = $dbh->prepare("SELECT * FROM users WHERE email = ?");
            if ($stmt->execute(array($user_email))) {
                while ($data = $stmt->fetch()) {
                    if($data['password']){
                        if(!strcmp($data['password'], $password)){
                            $_SESSION['email'] = $user_email;
                            $_SESSION['id'] = $data['id'];
                            header("Location: products.php");
                        } else {
                            $_SESSION['msg'] = 'Wrong Password';
                            header("Location: login.php");
                        }
                    }
                    else{
                        $_SESSION['msg'] = 'User Not Found';
                        header("Location: login.php");
                    }
                }
            }
            $stmt = null; // doing this is mandatory for connection to get closed
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    else header("Location: index.php");
?>