<?php

include "connection.php";
$showAlert = false;
$showError = false;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = $_POST['email'];
  $password = md5($_POST['pass']);
  $sql = "SELECT * FROM `sign-up` WHERE `email`='$email' AND `pass`='$password'";

  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);


  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['user_type'] == "User") {

        $showAlert = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: ecom.php");
      } elseif ($row['user_type'] == "Admin") {
        $showAlert = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['admin'] = true;
        $_SESSION['email'] = $email;

        header("location: admin.php");
      } else {
        $showError = "Invalid Username and Password";
      }
    }
  } else {
    $showError = "Invalid Credentials";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="./css/login.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<?php
if ($showAlert) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success !</strong> Your account is loggedin
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}

if ($showError) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error !</strong> ' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}


?>

<body>

  <div class="login">
    <div class="login_inner container">
      <div class="page_title">
        <h1>Customers login</h1>
      </div>
      <div class="column">
        <div class="column_main">

          <div class="customer_login">
            <div class="block_title">
              <h3>Registered Customers</h3>
            </div>
            <div class="block_content">

              <form action="./login.php" method="POST">
                <div class="field-note">
                  <h5>
                    If you have an account, sign in with your email address.
                  </h5>
                </div>
                <div class="field-email">
                  <label for="email">Email <span>*</span></label>
                  <div class="control">
                    <input type="email" name="email" id="email" required />
                  </div>
                </div>
                <div class="field-pwd">
                  <label for="pass">Password <span>*</span></label>
                  <div>
                    <input type="password" name="pass" id="pass" required />
                  </div>
                </div>
                <div class="field-choice">
                  <input type="checkbox" name="chk" id="chk" onclick="showPassword()" />
                  <label for="chk">show password</label>
                </div>
                <div class="actions_toolbar">

                  <div class="secondary">
                    <button type="submit" name="send" id="send" onclick="sub()">
                      sign in
                    </button>
                  </div>
                  <p>* required fields</p>
                </div>

              </form>
            </div>
          </div>
          <div class="new_customer">
            <div class="block_title">
              <h3>new Customers</h3>
            </div>
            <div class="block_content">
              <p>
                Creating an account has many benefits: check out faster, keep
                more than one address, track orders and more.
              </p>
              <div class="actions_toolbar">
                <div class="primary">
                  <a href="register.php " class="movecrt">
                    create an account
                  </a>
                  <a href="ecom.php" class="backclick movecrt">
                    Back
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="local.js"></script>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>


</html>