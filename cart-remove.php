<?php
require 'includes/common.php';
if(!isset($_SESSION['id'])){
    header("Location: index.php");
}
else {
    try{
            $dbh = new PDO('mysql:host=localhost;dbname=store', 'root', '', array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => true,
            PDO::ERRMODE_EXCEPTION => true
            ));
            
            $stmt = $dbh->prepare("DELETE FROM users_items WHERE user_id = :user_id and item_id = :item_id");
            $stmt->bindParam(':item_id', $_GET['id']);
            $stmt->bindParam(':user_id', $_SESSION['id']);
            $stmt->execute();
            $stmt = null; // doing this is mandatory for connection to get closed
            $dbh = null;
            header("Location: cart.php");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
}
?>