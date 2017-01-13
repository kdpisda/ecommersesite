<?php 
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header("Location: index.php");
    }
    else{
        $len = $_GET['len'];
        try{
            $dbh = new PDO('mysql:host=localhost;dbname=store', 'root', '', array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => true,
            PDO::ERRMODE_EXCEPTION => true
            ));
        } catch (PDOException $e){
            print "Error!: ".$e->getMessage()."<br/>";
        }
        for($i = 1; $i<= $len; $i++){
            try{
                $index = 'item'.$i.'_id';
                $item = $_GET[$index];
                $stmt = $dbh->prepare("UPDATE users_items SET status = 'Confirmed' WHERE item_id = :item_id AND user_id = :user_id");
                $stmt->bindParam(':item_id', $item);
                $stmt->bindParam(':user_id', $_SESSION['id']);
                $stmt->execute();
                $stmt = null; // doing this is mandatory for connection to get closed
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        $dbh = null;
    }
?>
<html>
<head>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/style.css" rel="stylesheet" type="text/css"/>
  <script src="assets/js/bootstrap.min.js"></script>
  <title>Products</title>
</head>
<body>
  <?php include 'includes/header.php'; 
    if(isset($_SESSION['msg'])){ ?>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <?php echo $_SESSION['msg']; ?>
    </div>
  </div>
</div>
    <?php } ?>
  <div class="container">
    <div class="jumbotron">
      <h1>Thank You for shoping with us</h1>
        <p><a href=products.php>Click Here</a> to purchase any other item.</p>
    </div>
  </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>