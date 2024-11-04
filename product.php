<?php
include "connection.php";

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    $sql =  "SELECT * FROM `cart` WHERE name = '$product_name'";
    $select_cart = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select_cart) > 0) {
?>
        <script>
            alert("product already added to cart");
        </script>

    <?php
    } else {
        $insert_sql = "INSERT INTO `cart`(name, price, img, qty) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')";
        mysqli_query($conn, $insert_sql);
    ?>
        <script>
            alert("product added to cart successfully");
        </script>

<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <title>Product Panel</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>


<body onload="navslide()">

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        };
    };
    ?>


    <div class="container">

        <!-- <section class="products"> -->

        <div class="box-container">
            <div class="swiper mySwiperr">
                <div class="swiper-wrapper">
                    <?php
                    $select = "SELECT * FROM `product`";
                    $select_products = mysqli_query($conn, $select);
                    if (mysqli_num_rows($select_products) > 0) {
                        while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                    ?>
                            <div class="swiper-slide">
                                <form action="" method="POST">
                                    <div class="product-item">

                                        <div class="product-img">
                                            <img src="uploaded_image/<?php echo $fetch_product['p_img']; ?>" height="100" width="100" alt="">
                                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['p_img']; ?>">
                                        </div>
                                        <div class="product-addCart">
                                            <button type="submit" name="add_to_cart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                                        </div>
                                        <div class="product-info">
                                            <h5><?php echo $fetch_product['p_name']; ?></h5>
                                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['p_name']; ?>">
                                            <div class="price">
                                                <p><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $fetch_product['p_price']; ?>/-</p>
                                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['p_price']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    <?php
                        };
                    };
                    ?>

                </div>
            </div>

        </div>

        <!-- </section> -->

    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="index.js"></script>
</body>

</html>