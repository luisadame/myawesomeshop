<?php
include './views/partials/head.php';
include './views/partials/header.php';
include './models/Product.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$product = Product::get($id);
?>
<section class="product__header section" style="background-image: url(<?=$product->image?>);">
    <div class="container">
        <div class="level">
            <p class="title is-2 has-text-white">
                <?=$product->name?>
            </p>
            <p class="title is-2 has-text-white has-text-weight-light"><?=$product->price?>€</p>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-10">
                <article class="message">
                    <div class="message-header">
                        <p>Description</p>
                    </div>
                    <div class="message-body">
                        <?=$product->description?>
                    </div>
                </article>
            </div>
            <div class="column">
                <a href="/buy" class="button is-primary is-large">
                    <span>Buy</span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
include './views/partials/bottom.php';
?>
