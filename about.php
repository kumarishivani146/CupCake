<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="icon" type="image/png" href="images/cupcake_icon.png">
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


.display_flex{
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.from-left {
  transform: translateX(-80%);
}

.from-right {
  transform: translateX(80%);
}

.from-left,
.from-right {
  transition: opacity 250ms ease-in, transform 400ms ease-in;
  opacity: 0;
}

.from-left.appear,
.from-right.appear {
  transform: translateX(0);
  opacity: 1;
}

.c2_right_text{
  width: 500px;
  height: 300px;
  padding: 30px;
  //border: 1px solid black;
}

.c3_right_image{
  text-align: center;
  padding: 50px;
  //border: 1px solid black;
}
@media (max-width: 800px) {
  .display_flex{
    flex-direction: column;
  }
  .c2_flex_image1{
    width:70%;
  }
  .c2_right_text{
    height: 230px;
  } 
  .c3_right_image{
    padding:20px;
  }
  
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
      <a class="navbar-brand" href="#"><img src="images/logo_no_bg.png" style="width:60px;"alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
  <li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
          </li>
  <li class="nav-item active">
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
  <div class="c1" style="text-align: center; margin-top: 90px;">
    <img src="images/about_c1_image1.png" style="width: 70%;" alt="">
  </div>
  <div class="c2" style="text-align: center;">
    <div class="display_flex">

      <div class="flex from-left slide-in c3_right_image">
        <img src="images/about_c2_image.jpg" alt="" class="c2_flex_image1">
      </div>
      <div class="flex from-right slide-in c2_right_text">
        <h3 style="color: rgb(235, 64, 92);">
          Welcome to all about cupcakes..
        </h3>
        <p style="color: rgb(121, 33, 33);">
          Writing is like baking cupcakes, you're trying to make something from the raw. 
          Like with cupcakes, it's flour and eggs and stuff, and with books it's ideas and words. 
          The end result is the same though, you want people to eat them up. So just order now because <br>
          When you look at a cupcake, you've got to smile.
        </p>
      </div>
    </div>
  </div>
  <div class="c3">
    <div class="display_flex">
      <div class="flex from-left slide-in c2_right_text" style="width: 600px;height: 300px;text-align: center;">
        <h3 style="color: rgb(235, 64, 92);">
          Welcome to all about us..
        </h3>
        <p style="color: rgb(121, 33, 33);">
          Cupcakes delivered across the Uttar Pradesh the next day We’re passionate about cupcakes,
           and love designing, making and delivering our delicious gifts and treats to happy people.
            <br>If you want to treat someone (or yourself!) to our cupcakes, simply choose from our extensive range of flavours 
            and order securely online – your cupcakes will be delivered by courier the next day* or on another date of your choice. 
            You can order our cupcakes in attractive presentation boxes. You can order 24 hours a day, and ask for your cupcakes to be
             delivered to any mainland business and residential addresses.
        </p>
      </div>
      <div class="flex from-right slide-in c3_right_image">
        <img src="images/about_c3_image.jpg" alt="" class="c2_flex_image1">
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
  <script>
    const sliders = document.querySelectorAll(".slide-in");
    const appearOptions = {
        threshold: 0,
        rootMargin: "0px 0px -250px 0px"
      };

      const appearOnScroll = new IntersectionObserver(function(
        entries,
        appearOnScroll
      ) {
        entries.forEach(entry => {
          if (!entry.isIntersecting) {
            return;
          } else {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
          }
        });
      },
      appearOptions);

      sliders.forEach(slider => {
        appearOnScroll.observe(slider);
      });
  </script>
</body>
</html>