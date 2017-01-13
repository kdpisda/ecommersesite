<?php require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        $_SESSION['msg'] = 'Login first to accsess your cart';
        header("Location: login.php");
    }
?>
<html>
<head>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/style.css" rel="stylesheet" type="text/css"/>
  <script src="assets/js/bootstrap.min.js"></script>
  <title>Cart</title>
</head>
<body>
    <?php include 'includes/header.php'; 
    $s_no = 1;
    $total_price = 0;
    $p_link = null;
    $link = null;
    ?>
    <center>
      <table class="table table-striped" style="max-width:500px;">
        <tr>
          <th>Item Number</th>
          <th>Item Name</th>
          <th>Item Price</th>
          <th></th>
        </tr>
            <?php 
            try{
                $dbh = new PDO('mysql:host=localhost;dbname=store', 'root', '', array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => true,
                PDO::ERRMODE_EXCEPTION => true
                ));
            
                $stmt = $dbh->prepare("SELECT item_id FROM users_items WHERE user_id =:user_id and status='Added to cart'");
                $stmt->bindParam(':user_id', $_SESSION['id']);
                if ($stmt->execute()) {
                    while($data = $stmt->fetch()){
                        $inr_stmt = $dbh->prepare("SELECT name, price , id FROM items WHERE id = :id");
                        $inr_stmt->bindParam(':id', $data['item_id']);
                        if($inr_stmt->execute()) {
                            while($t_data = $inr_stmt->fetch()){
                                echo '<tr><td>'.$s_no.'</td>';
                                echo '<td>'.$t_data['name'].'</td>';
                                echo '<td>'.$t_data['price'].'</td>';
                                echo '<td><a href="cart-remove.php?id='.$t_data['id'].'" class="btn btn-success">Remove</a></td></tr>';
                                $s_no++;
                                $total_price += $t_data['price'];
                                $p_link .= 'item'.($s_no-1).'_id='.$data['item_id'].'&';
                            }
                        }
                    }
                    $stmt = null;
                    $t_data = null;
                    $dbh = null;
                }
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            ?>
        <tr>
          <td></td>
          <td>Total</td>
          <td>Rs. <?php echo $total_price; ?>/-</td>
            <?php $link = 'len='.($s_no-1); ?>
          <td><a href="success.php?<?php echo $p_link.$link ?>" class="btn btn-primary">Confirm Order</a></td>
        </tr>
      </table>
    </center>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
