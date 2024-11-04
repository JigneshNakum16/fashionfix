<?php
include "connection.php";
$loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'];
$admin = isset($_SESSION['admin']) && $_SESSION['admin'];
$result = mysqli_query($conn, "SELECT * FROM `cart`");
$row_count = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body onload="navslide()">
    <div class="fixed">
        <div class="nav">
            <nav class="navbar container">
                <div class="logo">
                    <a href="./ecom.php"><img src="./img/logo2.png" alt="Logo" /></a>
                </div>
                <div class="header-menu">
                    <ul class="navbar-list">
                        <li><a class="navbar-links" href="./ecom.php">Home</a></li>
                        <li><a class="navbar-links" href="#items">Product</a></li>
                        <li><a class="navbar-links" href="#service">Services</a></li>
                        <li><a class="navbar-links" href="#collection">Collections</a></li>
                        <?php if ($admin): ?>
                            <li><a class="navbar-links" href="./admin.php">Add</a></li>
                        <?php endif; ?>

                        <li><a class="navbar-links" href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="header-action">
                    <?php if ($loggedIn): ?>
                        <a href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                    <?php else: ?>
                        <a href="./login.php" class="user"><i class="fa-solid fa-user"></i></a>
                    <?php endif; ?>
                    <?php if (!$admin): ?>
                        <a href="./cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i> <span><?php echo $row_count; ?></span></a>
                    <?php endif; ?>
                </div>
                <div class="mobile-navbar-btn">
                    <i class="fa-solid fa-bars mobile-navbar-icon"></i>
                    <i class="fa-solid fa-xmark mobile-navbar-icon"></i>
                </div>
            </nav>
        </div>
    </div>

    <script src="./index.js"></script>
</body>

</html>