<?php

session_start();

include 'dbcon.php';
    if(isset($_POST['submit'])){
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);

        $pass=password_hash($password, PASSWORD_BCRYPT);

        $emailq="select * from registration where email='$email'";
        $query=mysqli_query($con,$emailq);
        
        $emailcount=mysqli_num_rows($query);

        if($emailcount>0){
            $message = 'Email already exits';

            echo "<SCRIPT>
                alert('$message')
                window.location.replace('login.php');
            </SCRIPT>";
            mysql_close();   
        }
        else{
            $insertquery="insert into registration (name,email,password) values('$name','$email','$pass')";
            $iquery=mysqli_query($con,$insertquery);
            if($iquery){
                $message = 'Inserted sucessfully';

                echo "<SCRIPT>
                    alert('$message')
                    window.location.replace('home.php');
                </SCRIPT>";
                mysql_close();
            }
            else{
                $message = 'Connection failed';

                echo "<SCRIPT>
                    alert('$message')
                    window.location.replace('login.php');
                </SCRIPT>";
                mysql_close();
            }
        }
    }
?>