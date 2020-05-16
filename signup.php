<?php
include "includes/common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | Life Style Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</head>
<body>
    <?php
    include "includes/head.php";
    ?>

    <div class="container-fluid decor_bg">
        <div class="row">
            <div class="col-lg-6" >
                <img src="img/yess.jpg" width="75%">
            </div>
            <div class="col-lg-6">
                <div class="container " > 
                    <div calss="identity">
                        <div class="col-lg-6 col-md-6">
                            <h2>SIGN UP</h2>
                            <form  action="signup_script.php" method="POST">
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" name="F_name"  required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="L_name"  required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"  name="passward" placeholder="Password"  class="form-control"value id="myInput"><input type="checkbox" onclick="myFunction()">Show Password
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                </div>                                
                                <div class="form-group">
                                    <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "includes/footer.php";
    ?>
</body>
</html>