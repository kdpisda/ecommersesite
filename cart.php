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
    <?php include 'includes/header.php'; ?>
    <center>
      <table class="table table-striped" style="max-width:500px;">
        <tr>
          <th>Item Number</th>
          <th>Item Name</th>
          <th>Item Price</th>
          <th></th>
        </tr>
        <tr>
          <td></td>
          <td>Total</td>
          <td>Rs. 0/-</td>
          <td><button type="submit" class="btn btn-primary">Confirm Order</button></td>
        </tr>
      </table>
    </center>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
