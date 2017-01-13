<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header ("Location: index.php");
    }
    else{
        if(!isset($_GET['id'])){
            header ("Location: index.php");
        }
        else{
            $item_id = $_GET['id'];
            $msg = 'Added to cart';
            $user_id = $_SESSION['id'];
            try{
                $dbh = new PDO('mysql:host=localhost; dbname=store', 'root', '', array(
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => true,
                    PDO::ERRMODE_EXCEPTION => true
                    ));
            
                $stmt = $dbh->prepare("INSERT INTO users_items (user_id, item_id, status) VALUES(:user_id, :item_id, :msg)");
                $stmt->bindParam(':user_id', $user_id);
                $stmt->bindParam(':item_id', $item_id);                
                $stmt->bindParam(':msg', $msg);
                $stmt->execute();
                $stmt = null; // doing this is mandatory for connection to get closed
                $dbh = null;
                $_SESSION['msg'] = 'Added to cart successfully';
                header("Location: products.php");
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
?>