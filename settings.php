<?php require 'includes/common.php'; 
    if(!isset($_SESSION['email'])){
        header("Location: index.php");
    }
?>
<html>
<head>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/style.css" rel="stylesheet" type="text/css"/>
  <script src="assets/js/bootstrap.min.js"></script>
  <title>Setting</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <center>
      <div style="max-width:500px; text-align:left;">
        <div class="panel-body">
            <form method="post" action="setting_script.php">
                <h3><strong>Change Password</strong></h3>
                <?php if(isset($_SESSION['msg'])){
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Warning! </strong><?php echo $_SESSION['msg']; ?>
                </div>
                <?php session_unset($_SESSION['msg']); } ?>
                <div class="form-group">
                    <input type="password" class="form-control" name="old_pass" placeholder="Old Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="new_pass" placeholder="New Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="new_pass_rep" placeholder="Re-type New Password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Change</button>
            </form>
        </div>
      </div>
  </center>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
