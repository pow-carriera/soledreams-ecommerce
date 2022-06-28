<?php

require_once "./assets/php/config.php";
$prod_id = $_GET["id"];
echo $prod_id;
$sql = "DELETE FROM cart WHERE receipt = '" . $prod_id . "'";

mysqli_query($link, $sql);

?>