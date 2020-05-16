 <?php
 include "includes/common.php";
 include "includes/head.php";
 $email=$_SESSION['email_id'];
 $price=$_GET['pid'];
 $query="SELECT `Product_id` from user_cart where User_id='$email'";
 $result=mysqli_query($con,$query) or die(mysqli_error($con));
 $a=[];
 while($row=mysqli_fetch_array($result))
 {
 	array_push($a,$row[0]);
 }?>
 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th>Total Items </th>
                                <th>Total Price</th>
                                <th>Confirm Here</th>
                            </tr>
                        </thead>
                        <tbody>                            	      
                         
                            <tr>
                               <td><?php echo sizeof($a);?></td><td>Rs <?php echo (int)$_GET['pid'];?></td><td><a href="delete_cart.php?price=$price" class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       <?php
      // include "includes/footer.php";
       ?>
    </body>
</html>