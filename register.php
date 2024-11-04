<?php
include "./connection.php";
$showAlert = false;
$showError = false;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['uname'];
  $user_type = $_POST['user_type'];
  $email = $_POST['email'];
  $password = md5($_POST['pass']);
  $cpassword = md5($_POST['cpass']);

  $exitssql = "SELECT * FROM  `sign-up` WHERE email='$email'";
  $result = mysqli_query($conn, $exitssql);
  $exitsnumrow = mysqli_num_rows($result);

  if ($exitsnumrow > 0) {
    $showError = "Users Already Exits";
  } else {
    if ($password == $cpassword) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = " INSERT INTO `sign-up` (`uname`, `user_type`, `email`, `pass`, `date`) VALUES ('$username', '$user_type', '$email', '$password', current_timestamp())";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        $showAlert = true;
        header("location:login.php");
      }
    } else {
      $showError = "Password do not match";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration</title>
  <link rel="stylesheet" href="./css/register.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<?php
if ($showAlert) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert ">
    <strong>Success !</strong> Your account is now created and you can login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($showError) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert ">
    <strong>Error !</strong> ' . $showError . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>

<body>

  <div class="register">

    <div class="register_inner container">
      <div class="page_title">
        <h1>Create New Customer Account</h1>
      </div>
      <div class="column">
        <form action="./register.php" method="POST">
          <div class="column_main">

            <div class="personal_info info">
              <div class="block_title">
                <h3>personal information</h3>
              </div>
              <div class="block_content">

                <div class="field-uname field">
                  <label for="uname">User Name <span>*</span></label>
                  <div class="control">
                    <input type="type" name="uname" id="uname" required />
                  </div>
                </div>
                <div class="field-user-type field">
                  <label for="user_type">User-type <span>*</span></label>
                  <select name="user_type" id="user_type">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                  </select>
                </div>

              </div>
            </div>
            <div class="sign_info info">
              <div class="block_title">
                <h3>sign-in information</h3>
              </div>
              <div class="block_content">
                <div class="field-email field">
                  <label for="email">Email <span>*</span></label>
                  <div class="control">
                    <input type="email" name="email" id="email" required />
                  </div>
                </div>
                <div class="field-pwd field">
                  <label for="pwd">Password <span>*</span></label>
                  <div>
                    <input type="password" name="pass" id="pass" required />
                    <div class="strength">
                      <p>Password Strength: No Password</p>
                    </div>
                  </div>
                </div>
                <div class="field-pwd field">
                  <label for="pwd">confirm Password <span>*</span></label>
                  <div>
                    <input type="password" name="cpass" id="cpass" required />
                  </div>
                </div>
                <div class="field-choice">
                  <input type="checkbox" name="chk" id="chk" onclick="showPassword()" />
                  <label for="chk">show password</label>
                </div>
              </div>
            </div>
          </div>

          <div class="actions_toolbar">
            <div class="secondary btnn">
              <a href="login.php">
                already have an account?
              </a>
            </div>
            <div class="primary btnn">
              <button type="submit" name="send" id="send">
                create an account
              </button>
            </div>
          </div>
        </form>

      </div>


    </div>
  </div>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>


</html>