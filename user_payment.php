<?php
    session_start();
    include('dbcon.php');

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
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

/* Copy Right Footer */
.footer-copyright { background: #222; padding: 5px 0;}
.footer-copyright .logo {    display: inherit;}
.footer-copyright nav {    float: right;    margin-top: 5px;}
.footer-copyright nav ul {  list-style: none; margin: 0;  padding: 0;}
.footer-copyright nav ul li { border-left: 1px solid #505050; display: inline-block;  line-height: 12px;  margin: 0;  padding: 0 8px;}
.footer-copyright nav ul li a{  color: #969696;}
.footer-copyright nav ul li:first-child { border: medium none;  padding-left: 0;}
.footer-copyright p { color: #969696; margin: 2px 0 0;}

/* Footer Top */
.footer-top{  background: #252525;  padding-bottom: 30px; margin-bottom: 30px;  border-bottom: 3px solid #222;}

/* Footer transparent */
footer.transparent .footer-top, footer.transparent .main-footer{  background: transparent;}
footer.transparent .footer-copyright{ background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3) ;}

/* Footer light */
footer.light .footer-top{ background: #f9f9f9;}
footer.light .main-footer{  background: #f9f9f9;}
footer.light .footer-copyright{ background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3) ;}

/* Footer 4 */
.footer- .logo {    display: inline-block;}

/*==================== 
  Widgets 
====================== */
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
            <a class="nav-link" href="user_products.php">Our Products</a>
          </li>
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

        <div class="container" style="margin-top:100px;margin-bottom:100px">
                            <h2>       <?php
                                        include('dbcon.php');
                                        $query=mysqli_query($con,"SELECT * FROM `registration` WHERE id='".$_SESSION['id']."'");
                                        $row=mysqli_fetch_array($query);
                                        $cid=$row['id'];
                                        echo $row['name'];
                                        ?>'s Checking Out!
                            </h2>
                            <hr color="pink"> 
                        
                        <div class="col-md-12">
                        <br>
                    
                        <div class="panel panel-success panel-size-custom">
                                <div class="panel-body">  



            <center>
            
            <?php
            $user_id = $_SESSION['id'];

            include('dbcon.php');
            $query=mysqli_query($con,"SELECT * FROM `registration` WHERE id='".$_SESSION['id']."'");
            $row=mysqli_fetch_array($query);
            $name=$row['name'];
            $email=$row['email'];
            $contact=$row['contact'];


                                
        /*$query = mysqli_query($con,"SELECT * FROM order_details WHERE user_id='$user_id' AND order_id=''");
        $row3 = mysqli_fetch_array($query);
        $count = mysqli_num_rows($query);
        $prod_id=$row3['prod_id'];

        $query2=mysqli_query($con,"SELECT * FROM products WHERE prod_id='$prod_id'");
        $row2=mysqli_fetch_array($query2);*/
            

        $cart_table = mysqli_query($con,"SELECT sum(total) FROM order_details WHERE user_id='$user_id' AND order_id=''");
            $cart_count = mysqli_num_rows($cart_table);
            
                while ($cart_row = mysqli_fetch_array($cart_table)) {

                $total = $cart_row['sum(total)'];
                date_default_timezone_set('Asia/Manila');
                $date = date("Y-m-d H:i:s");
                $tax=$total * 0.12;
                $track_num= $user_id.$user_id+1000;
                $shipaddress=$_POST['shipaddress'];
                $city=$_POST['city'];
                $ship_add=$shipaddress .' '. $city;    
                echo '********* Your tracking number: '.$track_num.' | ';  
                echo 'Total: Rs. '.$total.' | ';
                echo 'Tax: Rs. '.$tax.' | '; 
                echo 'Shipping Address: '.$ship_add.' *********';

        $query = "INSERT INTO order (user_id, track_num,name, email, contact, shipping_add, order_date, status, totalprice, tax) 
                VALUES ('$user_id','$track_num','$name','$email','$contact','$ship_add','$date','Pending','$total','$tax')";  
                $result = mysqli_query($con,$query);

        mysqli_query($con,"UPDATE order_details SET order_id=order_id+1 WHERE user_id='$user_id' AND order_id=''")or die(mysqli_error());          


        }

        ?>
                <br><br>
                <hr class="hr"> 
                <br><br>
                <h3>Payment type will be a <b>Cash On Delivery</b></h3>
                <h3>Delivery process time, minimum of three(3) days and maximum of five(5) working days.</h3><br>
                <h6>Don't reload this page!!</h6>
                <h5>Visit Again!! V3 CupCakes</h5>
                
            <button type="button" class="btn btn-round" onclick = "window.print()" style="background-color:rgb(253, 104, 129);"><span class="now-ui-icons ui-1_check"></span> Print</button> 
            <a href="user_index.php"><button type="button" class="btn btn-round" style="background-color: rgba(255, 192, 203, 0.3);color:black"><span class="now-ui-icons ui-1_check" ></span> Back to Homepage</button></a>
            
            </center>

        </div>



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
<h5 class="widget-title">Follow up<span></span></h5>
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