<?php require 'includes/common.php';
    require 'check-if-added.php';
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
      <h1>Welcome to our Lifestyle store!</h1>
      <p>We have the best cameras, watches and shirts for you. No need to hunt
        around, we have all in one place.</p>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/fujifilm.jpg" alt="Fujifilm X-A2">
          <div class="caption">
            <h3>Canon EOS</h3>
            <p>Price: Rs. 36000.00</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/nikon.jpg" alt="Olympus DSLR">
          <div class="caption">
            <h3>Olmpus DSLR</h3>
            <p>Price: Rs. 50000.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/Nikon-D810.jpg" alt="Nikon DSLR">
          <div class="caption">
            <h3>Nikon DSLR</h3>
            <p>Price: Rs. 40000.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/sony.jpg" alt="Sony DSLR">
          <div class="caption">
            <h3>Sony DSLR</h3>
            <p>Price: Rs. 45000.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/katespade.jpg" alt="Faber Luba">
          <div class="caption">
            <h3>Faber Luba</h3>
            <p>Price: Rs. 18000.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/rolax.jpg" alt="HMT Milan">
          <div class="caption">
            <h3>HMT Milan</h3>
            <p>Price: Rs. 8000.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/tissot.jpg" alt="Titan Model #201">
          <div class="caption">
            <h3>Titon 201</h3>
            <p>Price: Rs. 3000.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/titan.png" alt="Titan Model #301">
          <div class="caption">
            <h3>Titan 301</h3>
            <p>Price: Rs. 13000.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/shirt1.jpg" alt="H&W">
          <div class="caption">
            <h3>H & w</h3>
            <p>Price: Rs. 800.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/shirt2.jpg" alt="Luis Phil">
          <div class="caption">
            <h3>Luis Phil</h3>
            <p>Price: Rs. 1000.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/shirt3.jpg" alt="John Jok">
          <div class="caption">
            <h3>John Jok</h3>
            <p>Price: Rs. 1500.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="assets/images/shirt4.jpg" alt="Jhalsani" style="height: 200px; width:252px;">
          <div class="caption">
            <h3>Jhalsani</h3>
            <p>Price: Rs. 1300.00</p>
            <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                        cart</a>';
                    } else {
                        ?>
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>
</body>
</html
