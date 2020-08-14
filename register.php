<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title> Registration </title>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <style type= "text/css" >

     body{
  background:linear-gradient(rgba(0, 0, 0,0), rgba(0, 0, 0,0)),url("./images/image3.png") no-repeat !important ;
    background-size: cover !important;
    background-position: center !important;
  font-family:sans-serif;
  margin-top:40px;
}
.regform{
  width:800px;
  background-color:rgb(0,0,0,0);
  margin:auto;
  padding:35px 0px 40px 0px;

  border-radius:15px 15px 0px 0px;
}
.main{
  top:50px;
  background-color: rgb(0,0,0,0);
  width:900px;
  margin:auto;
}
form{
  padding:30px;
}

#form-group{
  width: 100%;
}

.form-group{
  margin-left:20px;
  margin-top: 25px
  width:125px;
  height:75px;
  font-size: 18px;
  font-weight: 700;
}

.finame{
  position:relative;
  left:55px;
  top:-15px;

  line-height:40px;
  border-radius:6px;
  border: none;
  border-bottom: 2px solid skyblue;
  padding:0 22px;
  font-size: 16px;
}
.laname{
  position:relative;
  left:500px;
  top:-50px;
  line-height:40px;
  border-radius:6px;
border: none;
  border-bottom: 2px solid skyblue;
  padding:0 22px;
  font-size: 16px;
}
.filabel{
  position:relative;
  text-transform:capitalize;
  font-size:15px;
  left:185px;
  top:-100px;
   font-family: fontawesome;
}
.lalabel{
  position:relative;
  text-transform:capitalize;
  font-size:15px;
  left:187px;
  top:-50px;
  font-family: fontawesome;

}
.email{
  position:relative;
  left:100px;
  top:-40px;
  width:600px;
  line-height:40px;
 border: none;
  border-bottom: 2px solid skyblue;
  border-radius:6px;
  padding:0 22px;
  font-size: 16px;

}
.form{
  position:relative;
  text-transform:capitalize;
  font-size:14px;
  left:500px;
  top:-85px;

  width:200px;
  font-size: 18px;
  font-weight: 700;
}

   </style>
</head>

<body>
  <div class="container">
  <div class="regform" style="margin-top:70px">
    <h2>REGISTER HERE</h2>
  </div>
  <div class="main">
    <form action="registration.php" method="post">
      <div id="form-group">
        <label class="form-group">Name</label>
        <input class="finame" style=" left:100px;top:-15px; width:260px;" type="text" name="finame" placeholder="First Name"required>
        <input class="finame" style=" left:175px;top:-15px;  width:260px;"  type="text" name="laname" placeholder="Last Name"required>
      </div>
        <label class="form-group">Date of Birth</label>
        <input class="finame" style="color:grey; left:40px;top:-10px; width:192px;" type="date" name="dob"required>
        <label class="form-group" style=" margin-left:65px;">Contact Number</label>
        <input class="finame" style=" left:29px;top:-10px;  width:202px;"  type="tel" name="mob" required>
      <div class="form-group">
        <label >Email Id</label>
        <input class="email"  style="left:75px; top:-15px" type="email" name="Email" required>
      </div>
      <div style="margin-left:190px; margin-top:3px;">
        <?php if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        echo "<p>".$error."</p>";
      } ?>
      </div>
      <div class="form-group">
        <label>Username</label>
        <input class="finame" type="text" name="user" required>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input class="finame"  type="password" name="password" required >
      </div>
      <div class="form" >
        <label>Role : </label>
        <input type="radio" name="role" value="user" checked = yes> User
        <input type="radio" name="role" value="admin"> Admin
      </div>
      <button type="SUBMIT" class="btn btn-primary">Register</button>
    </form>
  </div>
</div>
</body>
</html>

<?php unset($_SESSION['error']); ?>
