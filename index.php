<?php
include "./views/partials/head.php";
include "./views/partials/header.php";

$db = new SQLite3('./database/shop.sqlite');
$result = $db->query('SELECT * FROM products;');
var_dump($result->fetchArray());

?>
    
<?php include "./views/partials/bottom.php"; ?>
