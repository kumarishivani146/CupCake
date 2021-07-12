
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="cupcake_icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
     integrity="undefined" crossorigin="anonymous">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login_style.css?v=<?php echo time();?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>


    <div id="main-container">
        <div class="left">
            <div class="left-cont1">
                <h1>
                    Welcome to V3 CupCakes!!
                </h1>
                <p style="font-size: 26px;">
                    Let's bake some amzing CupCakes...
                </p>
            </div>
            <div class="left-cont2">
                <div class="flex" >
                    
                    <i class="fa fa-youtube fa-lg"></i><i class="fa fa-facebook fa-lg" style="margin-left: 40px;"></i></i><i class="fa fa-instagram fa-lg" style="margin-left: 40px;"></i>
                    
                </div>

                <div class="flex">
                    &copy;<em id="date"></em>V3 CupCakes
                </div>
            </div>
        </div>
        
        <div class="right">
            <div class="right-cont1">
                    <div class="form1">
                        <form action="validation.php" class="register-form" method="POST">
                            <div class="upper">
                                Sign up
                            </div>
                            <input type="text" class="input-icon" placeholder="&#xf007;    Name" name="name" required>
                            <input type="email" class="input-icon" placeholder="&#xf0e0;    Work email" name="email" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password" ></span>
                            <input type="password" id="pass_log_id" class="input-icon" placeholder="&#xf023;    Password" name="password" required>
                            <label style="font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            
                            <input type="submit" name="submit" class="sub" value="Get started now">
                            <h4 class="message" style="margin-left: 2%;margin-top: 7%; color: gray;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Existing User? <span><a href="#" style="text-decoration: none;">Log in</a></span></h4>
                        </form>

                        <form action="logged.php" class="Login-form" method="POST">
                            <div class="upper">
                                Log in
                            </div>
                            <input type="email" class="input-icon" placeholder="&#xf0e0;    Work email" name="email"  required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            <input type="password" id="pass_log_id" class="input-icon" placeholder="&#xf023;    Password" name="password" required>
                            <label style="font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            </label>
                            <input type="submit" name="submit" class="sub" value="Log in">
                            <h4 class="message" style="margin-left: 2%;margin-top: 7%; color: gray;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Not Registered? <span><a href="#" style="text-decoration: none;">Register</a></span></h4>
                        </form>

                        
                    </div>
            </div>
            
        </div>
    </div>
    <script>
       $("body").on('click', '.toggle-password', function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#pass_log_id");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }

        });

        $('.message a').click(function(){
        $('form').animate({height:"toggle",opacity:"toggle"},"slow");
        });
    </script>
</body>
</html>