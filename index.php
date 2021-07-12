<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link rel="icon" type="image/png" href="cupcake_icon.png">
<link rel="stylesheet" href="index_style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.carousel-item {
  height: 100vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.carousel-caption {
  bottom: 270px;
  color:rgb(5, 136, 129);
}
.navbar{
  background-color: rgba(255, 192, 203, 0.8);
  color:black;
  //background-color: rgba(60,134,245,0.6);
}
.carousel-caption h5 {
  font-size: 45px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-top: 25px;
}

.carousel-caption p {
  width: 75%;
  color:rgb(5, 136, 129);
  margin: auto;
  font-size: 18px;
  line-height: 1.9;
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
.c1{
  height: 500px;
}

.c1_img{
  height: 545px;
}
hr {
  border:none;
  height: 20px;
 	width: 90%;
	height: 50px;
	margin-top: 0;
	border-bottom: 1px solid #1f1209;
	box-shadow: 0 20px 20px -20px #333;
  margin: -50px auto 10px; 
}

.display_flex{
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  color:rgb(235, 64, 92);
  
}
.flex{
  margin: 50px;
  text-align: center;
}
.c3_image{
  border-radius: 50%;
  border: 10px solid rgb(253, 104, 129);
  margin-bottom: 30px;
  transition: transform .5s;
}
.c3_image:hover {
  transform: scale(1.05); /* (150% zoom)*/
}

@media (max-width: 800px) {
  .display_flex{
    flex-direction: column;
  }
  .c1{
    height: 155px;
  }
  .c1_img{
    height:200px;
  }
  
}
.c4{
  text-align: center;
}
.c5_flex{
  padding:80px;
}
.flex_c5_right1{
  padding:20px;
  text-align: center;
  color: brown;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  font-size: 16px;
  line-height: 35px;
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

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    background-color: #3e3e3e;
    color: #fff;
    padding: 9px;
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
      <a class="navbar-brand" href="#"><img src="logo_no_bg.png" style="width:60px;"alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
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
            <a class="nav-link" href="#">Our Products</a>
          </li>
        </li>
  <li class="nav-item">
            <a class="nav-link" href="#">Occasions</a>
        </li>
  <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
  </ul>
  </div>
  </div>
  </nav>
  
  <div class="c1">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 500px;">
      <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 c1_img" src="main_s1.jpg" alt="First slide">
          <!--<div class="carousel-caption d-none d-md-block">
            <h5>
    Banner Text one</h5>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
    </div>-->
    </div>
    <div class="carousel-item">
          <img class="d-block w-100 c1_img" src="main_s2.jpg" alt="Second slide">
          <!--<div class="carousel-caption d-none d-md-block">
            <h5>
    Banner Text two</h5>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
    </div>-->
    </div>
    <div class="carousel-item">
          <img class="d-block w-100 c1_img" src="main_s3.jpg" alt="Third slide">
          <!--<div class="carousel-caption d-none d-md-block">
            <h5>
    Happiness</h5>
    <p>
    A cupcake a day, keeps the tummy rumbles away</p>
    </div>-->
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      
    </div>
  </div>
  <br><br>
  <hr>
  <div class="c2" style="text-align: center; margin-top: 80px;">
    <img src="cupcake_icon.png" alt="">
    <div class="desc1" style="width: 55%; ;margin:auto; margin-top:30px;color: brown; line-height: 30px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
      We carefully bake in small batches by hand each day using the finest ingredients sourced from local,
       sustainable, and whenever possible, organic producers. We are proud to offer cupcakes and cakes 
       that are freshly baked within hours, if not minutes, for your enjoyment.
    </div>
  </div>
  <div class="c3">
    <div class="display_flex">
      <div class="flex">
          <img src="c3_image2.jpg" alt="" class="c3_image">
          <h3>
            Our Designers
          </h3>
      </div>
      <div class="flex">
          <img src="c3_image1.jpg" alt=""  class="c3_image">
          <h3>
            Our Cupcakes
          </h3>
      </div>
      <div class="flex">
          <img src="c3_image3.jpg" alt=""  class="c3_image">
          <h3>
            Our Bakery
          </h3>
      </div>
    </div>
  </div>
  <div class="c4">
    <img src="Order-Online-1.png"  alt="" style="width: 70%;height: auto;">
  </div>
  <div class="c5">
    <div class="display_flex">
      <div class="c5_flex" style="text-align: center;">
        <div class="c5_image1" >
          <img src="c5_to_try.jpg" style="filter: drop-shadow(5px 5px 5px #222);position: absolute; z-index: 100;margin-top: -50px;margin-left: -125px;" alt="">
          <div class="div_border" style="width: 355px;height: 457px; border: 5px solid black; position: relative;"></div>
        </div>
      </div>
      <div class="c5_flex" style="display: flex;flex-direction: column;">
        <div class="flex_c5_right1">
            <img src="c5_image1.jpg" alt="">
        </div>
        <div class="flex_c5_right1">
          <div class="p_div" style="width:451px;height:145px;">
              <p>
                A cupcake a day, keeps the tummy rumbles away and for you, we can create the one like you want, that is you say it, we create it.
                Everything with your style, i.e. now you can customize your own cupcake!!!....and can serve you tummy with love...
              </p>
          </div>
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
            <a href="#"> <i class="fa fa-facebook"> </i> </a>
            <a href="#"> <i class="fa fa-twitter"> </i> </a>
            <a href="#"> <i class="fa fa-youtube"> </i> </a>
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