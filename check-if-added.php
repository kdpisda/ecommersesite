<?php
function check_if_added_to_cart($item_id){
        try{
            $dbh = new PDO('mysql:host=localhost;dbname=store', 'root', '', array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => true,
            PDO::ERRMODE_EXCEPTION => true
            ));
            
            $stmt = $dbh->prepare("SELECT * FROM users_items WHERE item_id=:item_id AND user_id =:user_id and status='Added to cart'");
            $stmt->bindParam(':item_id', $item_id);
            $stmt->bindParam(':user_id', $_SESSION['id']);
            if ($stmt->execute()) {
                $data = $stmt->fetchAll();
                if($data){
                    $stmt = null; // doing this is mandatory for connection to get closed
                    $dbh = null;                
                    return 1;   
                }
                else {
                    $stmt = null; // doing this is mandatory for connection to get closed
                    $dbh = null; 
                    return 0;
                }
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
}
?>