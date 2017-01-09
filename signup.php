<?php require 'includes/common.php'; ?>
<html>
<head>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/style.css" rel="stylesheet" type="text/css"/>
  <script src="assets/js/bootstrap.min.js"></script>
  <title>Signup</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <center>
      <div style="max-width:500px; text-align:left;">
        <div class="panel-body">
            <form method="post" action="signup_script.php">
                <h2><strong>SIGN UP</strong></h2>
                <div class="form-group">
                    <input type="text" class="form-control form-size" placeholder="Name" aria-describedby="basic-addon1" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-size" placeholder="Email" aria-describedby="basic-addon2" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-size" aria-label="password" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">      
                    <input type="text" class="form-control form-size" placeholder="Contact" aria-describedby="Contact-no" name="contact" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-size" placeholder="City" aria-describedby="City" name="city" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-size" aria-label="Full-Address" placeholder="Address" name="address" required>
                </div>
                <div class="form-group">
                    <span class="input-group-btn">
                    <input class="btn btn-primary" type="submit" value="Submit" name="submit">
                    </span>
                </div>
            </form>
        </div>
      </div>
    </center>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
