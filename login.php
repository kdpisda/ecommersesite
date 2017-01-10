<?php require 'includes/common.php'; 
    if(isset($_SESSION['email'])){
        header("Location: index.php");
    }
?>
<html>
<head>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/style.css" rel="stylesheet" type="text/css"/>
  <script src="assets/js/bootstrap.min.js"></script>
  <title>Login</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
    <center>
      <div class="panel panel-primary" style="max-width: 500px; text-align:left;">
        <div class="panel-heading">
          LOGIN
        </div>
        <div class="panel-body">
            <form method="post" action="login_submit.php">
                <?php if(isset($_SESSION['msg'])){
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo $_SESSION['msg']; ?></strong>
                </div>
                <?php session_destroy(); } else {?>
                <div class="panel-warning" style="margin-bottom:10px;">
                    Login to make a purchase
                </div>
                <?php } ?>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" style="margin-bottom:10px;" name="email" required>
                    <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" style="margin-bottom:10px;" name="password" required>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="panel-footer">
          Don't have an account? <a href="signup.php">Register</a>
        </div>
      </div>
    </center>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
