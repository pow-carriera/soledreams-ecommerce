<?php
session_start();
$userid = $_SESSION["id"];
$username = $_SESSION["username"];
$total_price = 0;
include("./assets/php/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="./img/logo.png" height="50" alt="MDB Logo" loading="lazy" />
                </a>
                <h3 class="mb-2 mb-lg-0">Sole Dreams Shop</h3>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="text-reset me-3" href="cart.php">
                    <i class="fas fa-shopping-cart fa-2xl"></i>
                </a>
                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-2xl"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#">My Profile: <?php echo $username; ?></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Password reset</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <br />
    <h3 class="text-center">Sole Dreams Shopping Cart</h3>
    <br />
    <?php
    $sql = "SELECT cart.receipt, products.product_img, products.product_price, products.product_vendor, products.product_name
        FROM products
        INNER JOIN cart ON products.product_id = cart.product_id
        WHERE cart.user_id = '" . $userid . "'";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {

    ?> <div class="d-flex justify-content-center">
                <table class="text-center table table-bordered table-striped w-75">
                    <thead>
                        <tr>
                            <th>
                                Product
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['product_vendor'] . " " . $row["product_name"] .  "</td>";
                    echo "<td>₱" . $row['product_price'] . "</td>";
                    echo "<td>";
                    echo '<a href="delete.php?id=' . $row['receipt'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span> Delete</a>';
                    echo "</td>";
                    echo "</tr>";
                    $total_price += $row["product_price"];
                }
            }
        }
                ?>
                    </tbody>
                </table>
                <br>
            </div>
            <br />
            <div class="d-flex justify-content-center">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Total: ₱<?php echo $total_price ?></b></td>
                            <td></td>
                            <td><a class="btn btn-primary" href="order.php?id=<?php echo $userid; ?>"><b>ORDER NOW</b></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
</body>

</html>