<?php
include './views/partials/head.php';
include './views/partials/header.php';
include './models/Product.php';

$products = Product::all();
?>
<section class="section">
    <div class="container">
        <div class="products">
            <?php
                foreach ($products as $product) {
                    include './views/components/product.php';
                }
            ?>        
        </div>
    </div>
</section>
<?php
include './views/partials/bottom.php';
?>
