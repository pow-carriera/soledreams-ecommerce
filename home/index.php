<?php
include("./assets/php/indexlogic.php");
include("./assets/php/config.php");
if(isset($_GET["order"])) {
$order = $_GET["order"];
if($order == true) {
    echo "<script>alert('Order successful!')</script>";
}
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
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
                        <a class="nav-link" href="#">Home</a>
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
    <h1 class="text-center mt-5">Nike Products</h1>
    <!-- Product List -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <?php
            $sql = "SELECT * FROM products";
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="card text-black">
                                <img src="<?php echo $row["product_img"] ?>" class="card-img-top" alt="Apple Computer" />
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class="card-title"><?php echo $row["product_vendor"] ?> <?php echo $row["product_name"]?> </h5>
                                    </div>
                                    <div class="text-center font-weight-bold mt-2">
                                        <span>Price: ₱<?php echo $row["product_price"] ?></span>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn primary" href="addtocart.php?product_id=<?php echo $row["product_id"]?>">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php   }
                }
            } ?>
        </div>
    </div>
    <!-- Navbar -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
</body>

</html>