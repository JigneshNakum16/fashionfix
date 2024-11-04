<?php
include "connection.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/ecom.css" />
  <title>FashionFix</title>
  <!-- swiper  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

  <!-- font-awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body onload="navSlide()">
  <div class="home ">
    <header>
      <!-- <video autoplay loop muted plays-inline id="myVideo">
        <source src="./video/fashion.mp4" type="video/mp4" />
      </video> -->

      <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="not found" id="myVideo">
      
      <?php
      include "./navbar.php";
      ?>

      <div class="homeInfo">
        <p>new arrival</p>
        <h1>
          Ready for <br />
          fashion
        </h1>
        <p>
          Casual line. Short design. 100% suede leather.<br />
          Backstitched elbow patche
        </p>
        <div class="gender">
          <span>Mens</span>
          <span>women's</span>
        </div>
      </div>
    </header>

    <a href="#" class="top-up"><i class="fa-solid fa-chevron-up"></i></a>

  </div>

  <div class="services container" id="service">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper ">
        <div class="swiper-slide">
          <div class="icon">
            <i class="fa-solid fa-credit-card"></i>
          </div>
          <div class="content">
            <h6>Buy Now. Pay Later</h6>
            <p>0% Interest financing available Pay after 30 days.</p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="icon">
            <i class="fa-solid fa-dollar-sign"></i>
          </div>
          <div class="content">
            <h6>Cashback Reward</h6>
            <p>Collect & Redeem on every order that you purchased</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon">
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <div class="content">
            <h6>Secure Payment</h6>
            <p>Guarante 100% secure payment online on our website</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon">
            <i class="fa-solid fa-ship"></i>
          </div>
          <div class="content">
            <h6>Free Shipping</h6>
            <p>
              All orders of $120 or more of eligible items across any product
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="products container" id="items">
    <div class="product-title">
      <h1>new in</h1>
    </div>

    <?php
    include "product.php";
    ?>

  </div>

  <div class="banner container">
    <div class="banner-inner">
      <div class="banner-first banner-img">
        <img src="./img/banner2.jpg" alt="" />
        <div class="banner-content">
          <p>sale off</p>
          <h1><span>50%</span>OFF <br />for all items,<br />hurry!</h1>
          <a href="">shop now</a>
        </div>
      </div>
      <div class="banner-second banner-img">
        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
        <div class="banner-content">
          <p>gift guide</p>
          <h1>
            the perfectly<br />
            for guys
          </h1>
          <a href="">shop now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="seller container">
    <div class="product-title">
      <h1>COMING SOON...</h1>
    </div>
    <div class="swiper mySwiperr">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <form action="./ecom.php" method="POST">
            <div class="product-item">

              <div class="product-img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPZfcbVprHbKWE6ankEbk19iLf7cZ8TuaxLQ&s" alt="not found" />
              </div>

              <div class="product-info">
                <h6>Cashmere cardigan with hood</h6>
                <div class="price">
                  <p><i class="fa-solid fa-indian-rupee-sign"></i>924.00</p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="swiper-slide">
          <form action="./ecom.php" method="POST">
            <div class="product-item">

              <div class="product-img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeGGxTMw6VyHdNIGPT9_RwdhcrMS6ezZT0eQ&s" alt="not found" />
              </div>

              <div class="product-info">
                <h6>100% wool twill scarfs</h6>
                <div class="price">
                  <p><i class="fa-solid fa-indian-rupee-sign"></i>1200.00</p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="swiper-slide">
          <form action="./ecom.php" method="POST">
            <div class="product-item">

              <div class="product-img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPH-_EL7RniAmQLRyUwC6fJy7Ye0qjEJkWJA&s" alt="" />
              </div>

              <div class="product-info">
                <h6>Chonograph Watch with leather belt</h6>
                <div class="price">
                  <p><i class="fa-solid fa-indian-rupee-sign"></i>3000.00</p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="swiper-slide">
          <form action="./ecom.php" method="POST">
            <div class="product-item">

              <div class="product-img">
                <img src="https://image.made-in-china.com/2f0j00bHskcBeaSNoZ/Fashion-Designer-Acetate-Eyewear-Optical-Eyeglass-Eye-Glasses-Frames-for-Men.webp" alt="not found" />
              </div>

              <div class="product-info">
                <h6>acetate sunglasses</h6>
                <div class="price">
                  <p><i class="fa-solid fa-indian-rupee-sign"></i>555.00</p>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="swiper-slide">
          <form action="./ecom.php" method="POST">
            <div class="product-item">

              <div class="product-img">
                <img src="https://cdn.drouot.com/d/image/lot?size=fsquare&path=547/134770/808e2c91fedbaaabbf7340c5ba9b44ab" alt="not found" />
              </div>

              <div class="product-info">
                <h6>Leather, wool and cashmere</h6>
                <div class="price">
                  <p><i class="fa-solid fa-indian-rupee-sign"></i>4500.00</p>
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="fancy-banner container">
    <div class="fancy-banner-inner">
      <div class="fancy-banner-first fancy-img">
        <img src="https://trinkwinkjewels.com/wp-content/uploads/2023/09/DSC_0229-scaled.jpg" alt="not found" />
        <div class="fancy-banner-content">
          <p>bag</p>
          <h1>basic<br />clutch</h1>
          <a href="">shop now</a>
        </div>
      </div>
      <div class="fancy-banner-second fancy-img">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7e8wNfs-yP-NlGSybi1wJZyoH7nb1VWC3gg&s" alt="not found" />
        <div class="fancy-banner-content">
          <p>shoes</p>
          <h1>Oxford<br />Shoes </h1>
          <a href="">shop now</a>
        </div>
      </div>
      <div class="fancy-banner-third fancy-img">
        <img src="https://i.pinimg.com/originals/da/63/38/da633888a624f22928643d00cb5ee960.jpg" alt="not found" />
        <div class="fancy-banner-content">
          <p>lookbook</p>
          <h1>outstanding<br />more </h1>
          <a href="">shop now</a>
        </div>
      </div>
    </div>
  </div>



  <div class="collection-container" id="collection">
    <?php
    require_once("./collection.php");
    ?>
  </div>

  <div class="contact_container" id="contact">
    <?php
    require_once("./contact.php");
    ?>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="index.js"></script>
</body>
<?php
require_once('./footer.php');
?>

</html>