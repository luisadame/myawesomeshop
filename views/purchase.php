<?php
$data_definition = [
    'name' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
    'age' => FILTER_SANITIZE_NUMBER_INT,
    'password' =>FILTER_DEFAULT,
    'order_date' => FILTER_DEFAULT,
    'country' => FILTER_SANITIZE_STRING,
    'address' => FILTER_SANITIZE_STRING,
    'products' => FILTER_SANITIZE_STRING,
    'premium' => FILTER_VALIDATE_BOOLEAN
];

$data = filter_input_array(INPUT_POST, $data_definition);
?>
<section class="section">
    <div class="container">
        <p class="title">Your purchase! <span class="is-size-6"><a href="/buy">Back</a></span></p>
        <table class="table is-bordered is-fullwidth">
            <?php foreach( $data as $name => $value ): ?>
                <tr>
                    <th><?=ucfirst($name)?></th>
                    <td><?=$value ?? 'Not especified'?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</section>
