<?php include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/footer.css">
  <title>Footer</title>
</head>

<body>

  <footer>
    <div class="ff container">
      <div class="footer content">
        <div class="footer-links address">
          <ul class="footer-contents">
            <li>DHARMSINH DESAI UNIVERSITY</li>
            <li>College Rd, Chalali, Nadiad, Gujarat 387001</li>
            <li>+91 9868847638</li>
            <li>support@fashionfix.com</li>
          </ul>
          <ul class="social">
            <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>

          </ul>
        </div>
        <div class="footer-links">
          <ul class="footer-contents">
            <li><a href="./ecom.php">Home</a></li>
            <li><a href="#items">Product</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#collection">Collections</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-links mail">
          <span>Be the first to get the latest news about trends, promotions and much more!</span>
          <div class="subscribe">
            <i class="fa-solid fa-envelope"></i>
            <input type="text" placeholder="Enter the Email">
            <a href="">subscribe</a>
          </div>
          <span>By subscribing, you accept the Privacy Policy</span>
        </div>

      </div>

      <div class="footer-bottom">
        <div class="copyright">
          <span>© <?php $year = date("Y");
                  echo $year; ?> FASHIONFIX. All Rights Reserved</span>

        </div>
        <div class="language-currency">
          <i class="fa-solid fa-earth-africa"></i><span>English / rupees - dollor - Euro</span>

        </div>
      </div>
    </div>
  </footer>

</body>

</html>