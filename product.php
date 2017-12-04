<?php
include './views/partials/head.php';
include './views/partials/header.php';
include './models/Product.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$product = Product::get($id);
?>
<div class="container">
    <?=$product->name?>
    <?=$product->description?>
    <?=$product->price?>
</div>
<?php
include './views/partials/bottom.php';
?>
