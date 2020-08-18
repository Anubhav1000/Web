<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
  <title> Registration </title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <style type= "text/css">
  body {
    background:linear-gradient(rgba(0, 0, 0,0), rgba(0, 0, 0,0)),
    url("./images/image3.png") no-repeat !important ;
    background-size: cover !important;
    background-position: center !important;
    font-family:sans-serif;
    margin-top:40px;
  }

  .regform {
    width:800px;
    background-color:rgb(0,0,0,0);
    margin:auto;
    padding:35px 0px 40px 0px;
    border-radius:15px 15px 0px 0px;
  }

  .main {
    top:50px;
    background-color: rgb(0,0,0,0);
    width:900px;
    margin:auto;
  }

  form {
    padding:30px;
  }

  #form-group {
    width: 100%;
  }

  .form-group {
    margin-left:20px;
    margin-top: 25px
    width:125px;
    height:75px;
    font-size: 18px;
    font-weight: 700;
  }

  .frstname {
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

  .lastname {
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

  .frstlabel {
    position:relative;
    text-transform:capitalize;
    font-size:15px;
    left:185px;
    top:-100px;
    font-family: fontawesome;
  }

  .lastlabel {
    position:relative;
    text-transform:capitalize;
    font-size:15px;
    left:187px;
    top:-50px;
    font-family: fontawesome;
  }

  .email {
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

  .form {
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
  <script>
            function validatePassword(password) {

                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }


        </script>

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
          <input class="frstname" style="left:100px; top:-15px; width:260px;"
          type="text" name="frstname" placeholder="First Name" required >
          <input class="frstname" style="left:175px; top:-15px; width:260px;"
          type="text" name="lastname" placeholder="Last Name">
        </div>

        <label class="form-group">Date of Birth</label>
        <input class="frstname" style="color:grey; left:40px;top:-10px; width:192px;"
        type="date" name="dob" required>
        <label class="form-group" style="margin-left:65px;">Contact Number</label>
        <input class="frstname" style="left:29px; top:-10px; width:202px;"
        type="tel" name="contact" required>

        <div class="form-group">
          <label >Email Id</label>
          <input class="email" style="left:75px; top:-15px" type="email" name="email" required>
        </div><br>


        <div>
          <label class="form-group" >Branch </label>
          <select name="branch" class="frstname"  style="left:85px;width:202px;top:-5px;" required>
            <option value="admin">Admin</option>
            <option value="cse">Computer Science</option>
            <option value="mechanical">Mechanical</option>
            <option value="biotech">Bio-Technology</option>
            <option value="eee">Electrical</option>
          </select>
        </div>

        <div style="margin-left:190px; margin-top:3px;">
          <?php
          if (isset($_SESSION['usrname_error'])) {
            $usrname_error = $_SESSION['usrname_error'];
            echo "<p>".$usrname_error."</p>";
          } ?>
        </div>

        <div>
          <label class="form-group">Username</label>
          <input class="frstname" style="left:60px;top:-15px; width:200px;" type="text" name="username" required>
        </div>

        <div style="margin-left:180px;" >
          <?php
          if (isset($_SESSION['passwrd_error'])) {
            $passwrd_error = $_SESSION['passwrd_error'];
            echo "<p>".$passwrd_error."</p>";
          } ?>
        </div>

        <span id="msg" style="margin-left:180px" ></span>
        <div >
          <label class="form-group" for="pwd">Password</label>
          <input class="frstname" style=" width:200px;" type="password" name="password"
           placeholder="Password"  required id="pwd"  onkeyup="validatePassword(this.value);"/>
          <label class="form-group" style="margin-left:100px;">Confirm<br>Password</label>
          <input class="frstname" style=" width:200px;" type="password" name="confirm_password"
           placeholder="Confirm Password"  required >
        </div>

        <div class="form" style="top:-300px;">
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

<?php unset($_SESSION['usrname_error']); ?>
<?php unset($_SESSION['passwrd_error']); ?>
