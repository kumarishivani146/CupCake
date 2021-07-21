<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:login.php');
        exit();
    }
?>
        <?php
        //print_r($_GET);

        include 'dbcon.php';
        $prod_id=$_GET['prod_id'];
        $query = "SELECT * FROM products WHERE prod_id='$prod_id'";
        $result = mysqli_query($con,$query);
        while($res = mysqli_fetch_array($result)){

                    $prod_id=$res['prod_id'];
                    $prod_price=$res['prod_price'];
                    $user_id = $_SESSION['id'];
                    $prod_id=$prod_id;
                    $prod_price=$prod_price;
                    $prod_qty = 1;                                       
                    $total = $prod_price;         
                    $user_id = $user_id;

                    $date=date("Y-m-d");
                    mysqli_query($con,"INSERT INTO order_details (prod_id,prod_qty,total,user_id) 
                                VALUES ('$prod_id','$prod_qty','$total','$user_id')") or die(mysql_error());
                            ?>
                        
                            <script type="text/javascript">
                                alert("Product Added To Cart!");
                                window.location = "user_products.php";
                            </script>

                            <?php
        } ?>

