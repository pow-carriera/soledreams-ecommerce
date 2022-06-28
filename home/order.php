<?php
session_start();
require_once "./assets/php/config.php";
$id = $_SESSION["id"];

$sql = "DELETE FROM cart WHERE user_id = '" . $id . "'";
mysqli_query($link, $sql);
header("location: index.php?order=true");
?>