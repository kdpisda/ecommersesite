<?php require 'includes/common.php'; 
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
    include 'includes/header.php'; 
?>
 <div class="content">
    <div class="banner-image">
        <div class="inner-banner-image">
            <center>
                <div class="banner-content">
                    <h1>We sell Lifestyle</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a class="btn btn-danger btn-lg active" href="products.php">
                        View More
                    </a>
                </div>
            </center>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>