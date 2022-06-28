<?php 
if(!isset($_GET["product_id"]) && empty(trim($_GET["product_id"]))) {
    header("location: index.php");
} else {
    session_start();
    include("./assets/php/config.php");
    echo "User: " . $user_id = $_SESSION["id"];
    echo "<br />";
    echo "Product: " . $product_id = $_GET["product_id"]; 

    $sql = "INSERT INTO `cart`(`user_id`, `product_id`) VALUES ('".$user_id."','".$product_id."')";
    mysqli_query($link, $sql);
    header("location:index.php");
}
?>