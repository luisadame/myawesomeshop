<?php
include './views/partials/head.php';
include './views/partials/header.php';
include './models/Product.php';

$products = Product::all();
?>
<div class="container">
    <div class="products">
        <?php
            foreach ($products as $product) {
                include './views/components/product.php';
            }
        ?>        
    </div>
</div>
<?php
include './views/partials/bottom.php';
?>
