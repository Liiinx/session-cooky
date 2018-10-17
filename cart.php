<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('Location: login.php');
}

require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] as $value) {
            //var_dump($value);
            ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
            <img src="assets/img/product-<?php echo $value['add_to_cart']; ?>.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3><?php echo $value['name']; ?></h3>
                    <p> <?php echo $value['description']; ?> </p>
                </figcaption>
            </figure>
        </div>
        <?php
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
