<?php
include './views/partials/head.php';
include './views/partials/header.php';
?>
<section class="section">
    <div class="container">
        <?php
            if($_POST) {
                include './views/purchase.php';
            } else {
                include './views/components/buy-form.php';
            }
        ?>
    </div>
</section>
<?php
include './views/partials/bottom.php';
?>
