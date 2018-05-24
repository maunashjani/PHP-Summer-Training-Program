<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php include 'plugins.php';?>

    <script>

        $(document).ready(function(){

            var urlParams = new URLSearchParams(window.location.search);
            $("#txtPID").html(urlParams.get('pid'));

            

        });

        function calculate()
        {
            var rate = $("#lblRate").html();
            var quantity = $("#txtQuantity").val();
            var total = rate * quantity;

            $("#lblTotal").html(total);
            $("#txtTotal").val(total);

        }

    </script>
    
   </head>
   <body>

   <div class="container">
   
    <?php include 'header.php';?>

    <div id="main">
    
        <br>

        <?php 

            if(isset($_GET['pid'])==false)
            {
                header("Location: index.php");
            }
            $productID = $_GET['pid'];
            
        ?>

        <div class="row  pt-5">
            
            <div class="col-sm-4">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>

            <div class="col-sm-8">
                
                <div id="description">
                        <p class="lead">
                            Description
                        </p>
                </div> 

                <div id="totalamount">
                        <p class="small">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                <input type="hidden" name="txtPID" id="txtPID" value="<?php $_GET['pid']; ?>">
                                Price: <i class="fa fa-inr"></i><label id="lblRate">100</label>/-
                                <br>
                                Quantity: <input id="txtQuantity" name="txtQuantity" type="number" onkeyup="calculate();" onchange="calculate();" min="1" class="form-control w-25" value="1" name="txtqty" id="txtqty">
                                <br>
                                Total: <i class="fa fa-inr"></i><label id="lblTotal">100</label>/-
                                <input type="hidden" name="txtTotal" id="txtTotal">
                                <br>
                                <input type="submit" class="btn btn-primary" value="Add to Cart">
                            </form>
                        </p>

                        <?php

                            if($_SERVER["REQUEST_METHOD"]=="POST")
                            {
                                $servername="localhost";
                                $username="root";
                                $password="";
                                $dbname="shopping";

                                $conn=mysqli_connect($servername,$username,$password,$dbname);

                                if(!$conn){
                                    die("connection failed:" . mysqli_connect_error());
                                }

                                $userID = 1;  //$_SESSION['userID'];
                                $quantity=$_POST['txtQuantity'];
                                $total=$_POST['txtTotal'];
                                $sessionID = session_id();
                                
                                $sql="insert into cart (userID, sessionID, productID, quantity, amount) values ('$userID', '$sessionID', '$productID', '$quantity', '$total')";
                                
                                if (mysqli_query($conn,$sql))
                                {
                                    echo "<script>swal('Cart','Product added to cart','info').then(() => { window.location.href='index.php'; });</script>";
                                }
                                else
                                {
                                    echo"Error:" .mysqli_error($conn);
                                }

                                mysqli_close($conn);
                                
                            }                            

                        ?>
                </div>
            
            </div>
            
        </div>
    
    </div>

    <br>
    <br>

    <?php include 'footer.php';?>
    
    </div>
</body>
</html>