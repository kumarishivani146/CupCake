<?php

session_start();

include 'dbcon.php';
    if(isset($_POST['submit'])){
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);

        //$pass=password_hash($password, PASSWORD_BCRYPT);

        $getpass="select * from registration where email='$email'";
        $res = mysqli_query($con,$getpass);
        $num=mysqli_num_rows($res);

        if($num==1){
            while($row=mysqli_fetch_assoc($res)){
                if(password_verify($password,$row['password'])){
                    $message = 'Logged in succesfully';

                    echo "<SCRIPT>
                        alert('$message')
                        window.location.replace('home.php');
                    </SCRIPT>";
                    mysql_close();
                }
                else{
                    $message = 'Invalid credentials';
        
                    echo "<SCRIPT>
                        alert('$message')
                        window.location.replace('login.php');
                    </SCRIPT>";
                    mysql_close();
                }
            }
        }
        else{
            $message = 'Invalid credentials';

            echo "<SCRIPT>
                alert('$message')
                window.location.replace('login.php');
            </SCRIPT>";
            mysql_close();
        }
    }
?>