<?php
    session_start();
    include('dbcon.php');

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_cart.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="images/cupcake_icon.png">
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <div class="container">
                        <h2>       <?php
                                    include('dbcon.php');
                                    $query=mysqli_query($con,"SELECT * FROM `registration` WHERE id='".$_SESSION['id']."'");
                                    $row=mysqli_fetch_array($query);
                                    $cid=$row['id'];
                                    echo $row['name'];
                                    ?>'s Shopping Cart
                        </h2>
                        <a class="btn btn-primary btn-round" href="user_index.php"><i class="now-ui-icons shopping_basket"></i> &nbsp Shop more items</a>
                        <hr color="orange"> 
                    
                    <div class="col-md-12">
                    <br>
                
                    <div class="panel panel-success panel-size-custom">
                            <div class="panel-body">





        <?php 
            $user_id = $_SESSION['id'];

            $query3=mysqli_query($con,"SELECT * FROM order_details WHERE user_id='$user_id' AND order_id=''");
            $count2=mysqli_num_rows($query3);
        ?>


    <?php
                    


                                        if (isset($_POST['submit'])) {

                                            $order_id=$_GET['order_id'];
                                            $prod_qty = $_POST['prod_qty'];
                                            $total = $_POST['prod_qty']*$_POST['total'];

                                            date_default_timezone_set('Asia/Manila');
                                            $date = date("Y-m-d H:i:s");      

                            mysqli_query($con,"UPDATE order_details SET
                            prod_qty='$prod_qty',total='$total' WHERE order_details_id='$order_id'") 
                        or die(mysqli_error());
                                                ?>

                                                <script type="text/javascript">
                                                    alert("Quantity Updated");
                                                    window.location= "user_cart.php";
                                                </script>


                                                <?php
                                        }
                                        ?>

    <form method="post"> 

    <button type="submit" name="submit" class="btn btn-success btn-round">Update</button> 

    
    <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                    <th>Product</th>
                    <th>Description</th>
                    <th width="100">Quantity</th>
                    <th width="100">Price(Php)</th>
                    <th width="100">Total(Php)</th>
            </tr>
                </thead>
                <tbody>
                    <?php 
                        $user_id = $_SESSION['id'];
                        $order_id=$_GET['order_id'];

                    $query=mysqli_query($con,"SELECT * FROM order_details WHERE order_details_id='$order_id'");
                    $row=mysqli_fetch_array($query);
                    $count=mysqli_num_rows($query);
                    $prod_id=$row['prod_id'];
                    $query2=mysqli_query($con,"SELECT * FROM products WHERE prod_id='$prod_id'");
                    $row2=mysqli_fetch_array($query2);
                    $prod_qty=300;

                    ?>
            <tr>


                    <td> <img width="150" height="150" src="images/<?php echo $row2['prod_p1'];?>" alt=""/></td>
                    <td><b><?php echo $row2['prod_name'];?></b><br><br>
                            <?php $string=$row2['prod_desc'];?></td>
            <td>
        <div class="input-append">
        <?php
    echo "<select class='btn btn-warning btn-round dropdown-toggle' size='1' name='prod_qty' id='prod_qty'>";
    $i=1; $prod_qty=$prod_qty;
    while ($i <= $prod_qty ){
        echo "<option value=".$i.">".$i."</option>";
        $i=$i*2;
    }
    echo "</select>";
    ?>

        </div>


            </td>
                    <td><?php  echo $row2['prod_price']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                <input type="hidden" name="total" value="<?php echo $row2['prod_price'];?>">
                    </tr>
            
    
            </tbody>
                </table>
        
        
            
            
    <a href="user_cart.php" class="btn btn-large"><i class="icon-arrow-left"></i> Cancel </a>

    </form>







                            </div>
</body>
</html>