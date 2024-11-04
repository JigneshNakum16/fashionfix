<?php

include 'connection.php';
session_start();

if (isset($_POST['update_update_btn'])) {
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET qty = '$update_value' WHERE id = '$update_id'");
   if ($update_quantity_query) {
      header('location:cart.php');
   };
};

if (isset($_GET['remove'])) {
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if (isset($_GET['delete_all'])) {
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cart</title>
   <link rel="stylesheet" href="./css/style.css">
</head>


<body>
   <?php
   include "navbar.php";
   ?>
   <div class="container">

      <section class="shopping-cart">

         <h1 class="heading">shopping cart</h1>

         <table>

            <thead>
               <th colspan="2">Item</th>
               <th>price</th>
               <th>quantity</th>
               <th>total price</th>
               <th>action</th>
            </thead>

            <tbody>

               <?php

               $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
               $grand_total = 0;
               if (mysqli_num_rows($select_cart) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
               ?>

                     <tr>
                        <td><img src="uploaded_image/<?php echo $fetch_cart['img']; ?>" class="uimg" alt=""></td>
                        <td><?php echo $fetch_cart['name']; ?></td>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i><?php echo number_format($fetch_cart['price']); ?>/-</td>
                        <td>
                           <form action="" method="post">
                              <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
                              <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['qty']; ?>">
                              <input type="submit" value="update" name="update_update_btn">
                           </form>
                        </td>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i><?php $sub_total = (float)$fetch_cart['price'] * (int)$fetch_cart['qty'];
                                                                           echo number_format($sub_total); ?>/-</td>

                        <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
                     </tr>
               <?php
                     $grand_total += (float)$sub_total;
                  };
               };
               ?>
               <tr class="table-bottom">

                  <td colspan="4">grand total</td>
                  <td><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $grand_total; ?>/-</td>
                  <td></td>
               </tr>


               <tr>
                  <td colspan="2"><a href="ecom.php" class="option-btn" style="margin-top: 0;"><i class="fa-solid fa-angle-left"></i> continue shopping</a></td>
                  <div class="checkout-btn">
                     <td colspan="2"> <a href="checkout.php" class="btn <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="fa-solid fa-bag-shopping"></i> procced to checkout</a></td>
                  </div>
                  <td colspan="2"><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash-can"></i> delete all </a></td>
               </tr>
            </tbody>

         </table>


      </section>

   </div>
   <?php
   include "footer.php";
   ?>
</body>

</html>