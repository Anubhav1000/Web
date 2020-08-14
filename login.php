<?php
session_start(); ?>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="stylesheets/login.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="login-box">
      <div class="row">
        <div class="col-md-6 login-left">
          <h2>LOGIN</h2>
          <form action="validation.php" method="post">
            <div class="form-group">
              <input type="text" name="user" class="form-control" placeholder= "&#xf007; Username" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder= "&#xf023; Password"required>
            </div>
            <?php if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              echo "<p>".$error."</p>";
            } ?>
            <button type="SUBMIT" class="btn btn-primary">LOGIN </button>
            <a style="float :right" href="register.php">Haven't Registerted yet?</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php unset($_SESSION['error']); ?>
