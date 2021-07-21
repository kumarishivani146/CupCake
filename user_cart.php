<?php
    session_start();
    include 'dbcon.php';

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_products.php');
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
<style>
    .navbar{
    background-color: rgba(255, 192, 203, 0.8);
    color:black;
    //background-color: rgba(60,134,245,0.6);
    }

    .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
    color: #fff;
    }

    .navbar-light .navbar-nav .nav-link {
    color: black;
    font-weight: bold;
    }

    .navbar-toggler {
    background: #fff;
    }

    .navbar-nav {
    text-align: center;
    }

    .nav-link {
    padding: .2rem 1rem;
    }

    .nav-link.active,.nav-link:focus{
    color: #fff;
    }

    .navbar-toggler {
    padding: 1px 5px;
    font-size: 18px;
    line-height: 0.3;
    }

    .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: #fff;
    }
    .nav-item{
    padding-left: 60px;
    }
    .hr {
    border:none;
    height: 20px;
    width: 90%;
    height: 50px;
    margin-top: 0;
    border-bottom: 1px solid #1f1209;
    box-shadow: 0 20px 20px -20px #333;
    margin: -50px auto 10px; 
    }
    footer .main-footer{  padding: 20px 0;  background: #252525;}
    footer ul{  padding-left: 0;  list-style: none;}
    .footer-copyright { background: #222; padding: 5px 0;}
.footer-copyright .logo {    display: inherit;}
.footer-copyright nav {    float: right;    margin-top: 5px;}
.footer-copyright nav ul {  list-style: none; margin: 0;  padding: 0;}
.footer-copyright nav ul li { border-left: 1px solid #505050; display: inline-block;  line-height: 12px;  margin: 0;  padding: 0 8px;}
.footer-copyright nav ul li a{  color: #969696;}
.footer-copyright nav ul li:first-child { border: medium none;  padding-left: 0;}
.footer-copyright p { color: #969696; margin: 2px 0 0;}

.footer-top{  background: #252525;  padding-bottom: 30px; margin-bottom: 30px;  border-bottom: 3px solid #222;}

footer.transparent .footer-top, footer.transparent .main-footer{  background: transparent;}
footer.transparent .footer-copyright{ background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3) ;}

footer.light .footer-top{ background: #f9f9f9;}
footer.light .main-footer{  background: #f9f9f9;}
footer.light .footer-copyright{ background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3) ;}

.widget{  padding: 20px;  margin-bottom: 40px;}
.widget.widget-last{  margin-bottom: 0px;}
.widget.no-box{ padding: 0; background-color: transparent;  margin-bottom: 40px;
  box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; -ms-box-shadow: none; -o-box-shadow: none;}
.widget.subscribe p{  margin-bottom: 18px;}
.widget li a{ color: #fff;}
.widget li a:hover{ color: #aaa;text-decoration: none;}
.widget-title {margin-bottom: 20px;}
.widget-title span {background: #839FAD none repeat scroll 0 0;display: block; height: 1px;margin-top: 25px;position: relative;width: 20%;}
.widget-title span::after {background: inherit;content: "";height: inherit;    position: absolute;top: -4px;width: 50%;}
.widget-title.text-center span,.widget-title.text-center span::after {margin-left: auto;margin-right:auto;left: 0;right: 0;}
.widget .badge{ float: right; background: #7f7f7f;}


.typo-light h1, 
.typo-light h2, 
.typo-light h3, 
.typo-light h4, 
.typo-light h5, 
.typo-light h6,
.typo-light p,
.typo-light div,
.typo-light span,
.typo-light small{  color: #fff;}

ul.social-footer2 { margin: 0;padding: 0; width: auto;}
ul.social-footer2 li {display: inline-block;padding: 0;}
ul.social-footer2 li a:hover {background-color:#ff8d1e;}
ul.social-footer2 li a {display: block; height:30px;width: 30px;text-align: center;}
.btn{background-color: #ff8d1e; color:#fff;}

.btn:hover, .btn:focus, .btn.active {background: #4b92dc;color: #fff;
-webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-webkit-transition: all 250ms ease-in-out 0s;
-moz-transition: all 250ms ease-in-out 0s;
-ms-transition: all 250ms ease-in-out 0s;
-o-transition: all 250ms ease-in-out 0s;
transition: all 250ms ease-in-out 0s;

}

.fa {
    //display: inline-block;
    //font: normal normal normal 14px/1 FontAwesome;
    //background-color: #3e3e3e;
    //color: #fff;
    //padding: 9px;
    border-radius: 5px;
}

#subscribe-box .emailfield {
    margin: auto;
}


input[type="text"] {
    background: rgba(255,255,255,0.075);
    padding: 10px 15px;
    color: #aaa;
    border: 3px solid rgba(0,0,0,0.1);
    font-size: 14px;
    margin-bottom: 16px;
    border-radius: 5px;
    transition: all 0.2s cubic-bezier(0.4,0,0.2,1);
    transition-delay: 0.2s;
    text-align: center;
    width: 100%;
}

input.submitbutton.ripplelink {
    background: #e67e22;
    border: 3px solid rgba(0,0,0,0.1);
    color: #fff;
    border-color: #e67e22;
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2);
    transition-delay: 0s;
    width: 100%;
    font-size: 14px;
    /* font-weight: 700; */
    border: 0px solid;
    transition: all 0.2s cubic-bezier(0.4,0,0.2,1);
    padding: 10px 15px;
    margin-bottom: 16px;
    border-radius: 5px;
}

.thumb-content ::before {
    content: "\f190";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-left: 5px;
    color: ##ffffff;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid" style="padding: 0;">
      <a class="navbar-brand" href="#"><img src="images/logo_no_bg.png" style="width:60px;"alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
  <li class="nav-item">
            <a class="nav-link" href="user_index.php">Home</a>
          </li>
  <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
  <li class="nav-item">
            <a class="nav-link" href="Contact Us.php">Contact Us</a>
          </li>
  <li class="nav-item">
            <a class="nav-link" href="#">Personalized</a>
          </li>
  <li class="nav-item">
            <a class="nav-link" href="user_products.php">Our Products</a>
          </li>
        </li>
  <li class="nav-item">
            <a class="nav-link" href="#">Occasions</a>
        </li>

<li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i>My cart</a>
        </li>
  <li class="nav-item">
        <a href="#" style="text-decoration:none;">
            <p style="color:black;font-weight:bold">
                <i class="fa fa-user" aria-hidden="true"></i>
                <?php
                    include 'dbcon.php';
                    $query=mysqli_query($con,"SELECT * FROM `registration` WHERE id='".$_SESSION['id']."'");
                    $row=mysqli_fetch_array($query);
                    echo ''.$row['name'].'';
                ?>
            </p>
        </a>
        </li>
<li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
  </ul>
  </div>
  </div>
  </nav>
  
    <div class="container" style="margin-bottom:100px;">
                      <div class="cart1" style="margin-top:100px;">
                      <h2 >   
                          <?php
                                 include 'dbcon.php';
                                 $query=mysqli_query($con,"SELECT * FROM `registration` WHERE id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 $cid=$row['id'];
                                 echo $row['name'];
                                ?>'s Shopping Cart 
                      </h2>
                      <a class="btn btn-round" href="user_products.php" style="background-color:pink;"><i class="now-ui-icons shopping_basket"></i> &nbsp Shop more items</a>
                      <hr color="pink"> 
                      </div>

                      <div class="panel panel-success panel-size-custom">
                        <div class="panel-body">



      <?php 
        $user_id = $_SESSION['id'];

        $query3=mysqli_query($con,"SELECT * FROM order_details WHERE user_id='$user_id' AND order_id=''");
        $count2=mysqli_num_rows($query3);
      ?>

  <form method="post" action="user_payment.php">

   

    <h5>[ <small><?php echo $count2;?> </small>] types of item.</h5>  

      <table class="table table-condensed table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th width="100">Quantity</th>
                  <th width="100">Price(Rs.)</th>
                  <th width="100">Total(Rs.)</th>
                  <th width="100">Option</th>
                </tr>
              </thead>

              <tbody>

          <?php 
            $query=mysqli_query($con,"SELECT * FROM order_details WHERE user_id='$user_id' and order_id=''");
            while($row=mysqli_fetch_array($query)){
            $count=mysqli_num_rows($query);
            $prod_id=$row['prod_id'];

            $query2=mysqli_query($con,"SELECT * FROM products WHERE prod_id='$prod_id'");
            $row2=mysqli_fetch_array($query2);
          ?>

              <tr>
                  <td> <img width="150" height="150" src="images/<?php echo $row2['prod_p1'];?>" alt=""/></td>
                  <td><b><?php echo $row2['prod_name'];?></b><br><br>
                    <?php echo $row2['prod_desc'];
                    ?>
                  </td>
                  <td><br><?php  echo $row['prod_qty']; ?></td>
                  <td><br><?php  echo $row2['prod_price']; ?></td>
                  <td><br><?php echo $row['total'];?></td>
                  <td>     
                    <a href="edit_order_details.php?order_id=<?php echo $row['order_details_id'];?>" ><button class="btn btn-round" type="button" style="background-color: rgba(255, 192, 203, 0.2);">update qty</button></a>
                    <br>
                    <br>
                     <a href="delete_order_details.php?order_id=<?php echo $row['order_details_id'];?>" ><button class="btn btn-round" onclick="return confirm('Are you sure you want to delete?')" type="button" style="background-color:rgb(253, 104, 129);">remove</button></a>
                  </td>

                  <?php
                 } ?>

              </tr>
        
              <tr>
                  <td></td>
                  <td></td>
                  <td colspan="2"><b>Total Price</b></td>
                  <td class="label label-important"> <strong>
                     <?php
                      $result5 = mysqli_query($con,"SELECT sum(total) FROM order_details WHERE user_id='$user_id' and order_id=''");
                      while($row5 = mysqli_fetch_array($result5))
                        { 
                        echo 'Rs. '.$row5['sum(total)'];
                        echo '<input type="hidden" name="total" value="'.$row5['sum(total)'].'">';
                        }
                      ?></strong>
                  </td>
                  <td></td>
              </tr>

              </tbody>
          </table>
    

                <?php
              if($count2==0 ){
            ?>

                <script type="text/javascript">
                  alert("Shopping Cart Empty! Add an item.");
                  window.location= "user_index.php";
                </script>

               <?php
              }else{
            ?>
           
                <button  type="submit" id="" onclick="return confirm('Are you sure you want to Checkout?')" name="submit" class="btn btn-round pull-right" data-toggle="modal" data-target="#myModal" style="background-color:green;">
                <i class="now-ui-icons shopping_bag-16"></i> Check Out</button> 

               <?php
                }
              ?>

            <!-- Modal Core -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header"  style="background-color: rgba(255, 192, 203, 0.2);">
                  <h4 class="modal-title" id="myModalLabel">Shipping Address:</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body" >

                      <div class="form-group">
                      <input type="text" class="form-control" name="shipaddress" placeholder="Complete Address For Delivery Purpose." required/>
                      <br>
                      <select class="btn btn-warning btn-round dropdown-toggle" size="1" name="city" style="background-color: rgba(255, 192, 203, 0.4);color:black">
                      <option value="Sarnath">Sarnath</option>
                      <option value="Ashapur">Ashapur</option>
                      <option value="Pahariya">Pahariya</option>
                      <option value="Naibasti">Naibasti</option>
                      <option value="Lalpur">Lalpur</option>
                      <option value="Pandeypur">Pandeypur</option>
                      <option value="Orderly Bazaar">Orderly Bazaar</option>
                      <option value="Kach-heri">Kach-heri</option>
                      <option value="Cantt">Cantt</option>
                      <option value="Lahurabir">Lahurabir</option>
                      <option value="Kabir Chaura">Kabir Chaura</option>
                      <option value="Maidagin">Maidagin</option>
                      <option value="Maldhaiya">Maldhaiya</option>
                      <option value="Sigra">Sigra</option>
                      <option value="Godowlia">Godowlia</option>
                      <option value="Lanka">Lanka</option>
                      </select>  
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-round" data-dismiss="modal">Close</button>
                    <a><button type="submit" name="submit" class="btn btn-success btn-round"><i class="now-ui-icons shopping_delivery-fast"></i> Submit</button></a>
                  </div>
              </div>
            </div>
            </div>

    </form>




    </div>

            </div>
            </div>

    <footer id="footer" class="footer-1">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">

  <div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title">COMPANY NAME<span></span></h5>
<p>About the company, little description will goes here.. </p>
</div>
</div>

  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Quick Links<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="#.">&nbsp;Our Products</a></div> 
</li>
<li>
<div class="thumb-content"><a href="#.">&nbsp;Our Designers</a></div> 
</li>
<li>
</ul>
</div>
</div>

  

      <div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title" >Follow up<span></span></h5>
            <a href="#" style="color:white"> <i class="fa fa-facebook"> </i> </a>
            <a href="#" style="color:white"> <i class="fa fa-twitter"> </i> </a>
            <a href="#" style="color:white"> <i class="fa fa-youtube"> </i> </a>
</div>
</div>
<br>
  <br>


<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Contact Us<span></span></h5>
            <p>sales@v3.com<br>support@v3.com<br>(123) 456-789</p>
  <div class="emailfield">
<input type="text" name="email" value="Email">
<input name="uri" type="hidden" value="arabiantheme">
<input name="loc" type="hidden" value="en_US">
<input class="submitbutton ripplelink" type="submit" value="Subscribe">
</form>  
</div>
</div>

</div>
</div>
</div>
  
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
&copy;<em id="date"></em>V3 CupCakes
</div>
</div>
</div>
</div>
</footer>
</body>
</html>