<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('location:logout.php');
}
?>
<html>
<head>
  <title>OTP Authentication</title>
  <link rel="stylesheet" type="text/css" href="stylesheets/login.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container" >
    <div class="login-box">
      <div class="row">
        <div class="col-md-6 login-left"style="width:900px " >
          <h1 style="width:900px;"><b> Thankyou for Signing In </b></h1>
        <br><br>
          <h3 align="center" style="padding-left:50px " > <i>Verify your Email Address by adding the OTP sent to your Email ID </i>&nbsp;</h3><br><br>
          <h4 align="center">OTP Authentication</h4><br>
          <form action="otpverify.php" method="post">
            <div class="form-group">
              <input type="number" name="otp" class="form-control" placeholder= "One Time Password" required>
            </div>
            <?php if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              echo "<p>".$error."</p>";
            } ?><br>
            <button type="SUBMIT" class="btn btn-primary">SUBMIT</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php unset($_SESSION['error']); ?>
