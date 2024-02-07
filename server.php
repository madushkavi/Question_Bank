<?php
    session_start();
    
    //intial variables
    $username="";
    $password="";
    $errors =array();
    $notify="";

    //connect to the database
    $con = mysqli_connect('localhost','root','','projectquectionbank');

    //check database is connect
    if(mysqli_connect_errno())
    {
        echo "Database is not connect:".mysqli_connect_error();
        exit();
    }

    //remeber username password get to the log in page
    if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
    {
        $id = $_COOKIE['username'];
        $pass = $_COOKIE['password'];
        $val = "checked";
    }
    else
    {
        $id ="";
        $pass ="";
        $val ="";
    }

    //enter values to the variable 
    if(isset($_POST['signup']))
    {
        $username=mysqli_real_escape_string($con,$_POST['username']);
        $fullname=mysqli_real_escape_string($con,$_POST['fullname']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $password1=mysqli_real_escape_string($con,$_POST['password1']);
        
        //cheack all textbox are filled and enter passwords are same
        if(empty($username)){array_push($errors,"Username Required");}
        if(empty($fullname)){array_push($errors,"Fullname Required");}
        if(empty($email)){array_push($errors,"Email Required");}
        if(empty($password)){array_push($errors,"Password Required");}
        if(empty($password1)){array_push($errors,"Password Required");}
        if($password != $password1)
        {
            array_push($errors,"Passwords Are Not Same");
        }

        //check username and email is existed
        $check="SELECT * FROM members where username='$username' OR email='$email'";
        $result =mysqli_query($con,$check);
        //add to results to array
        $user =mysqli_fetch_assoc($result);
        if($user){
            if($user['username']==$username)
            {
                array_push($errors,"Username is Already Exists");
            }
            if($user['email']==$email)
            {
                array_push($errors,"Email is Already Exists");
            }
        }
        //check no errors
        if(count($errors)==0)
        {
            //encrypt password
            //$password = md5($password);

            $query ="INSERT INTO members (fullname,username,email,password) VALUES('$fullname','$username','$email','$password')";

            mysqli_query($con,$query);
            $notify="Your Successfully Registered.Please Log In.Thank You!";
        }
    }

    //Log in
    if(isset($_POST['submit']))
    {
        $username=mysqli_real_escape_string($con,$_POST['username']);
        $password=mysqli_real_escape_string($con,$_POST['password']);

        if(!empty($username) && !empty($password)){
            //$password = md5($password);
            $query = "SELECT *FROM members WHERE username='$username' AND password='$password'";

            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result) == 1)
            {
                
                if(isset($_POST['rememberme']))
                {
                    setcookie('username',$_POST['username'],time()+(60*60*24*7));
                    setcookie('password',$_POST['password'],time()+(60*60*24*7));
                }
                else
                {
                    setcookie('username','',time()-(60*60*24*7));
                    setcookie('password','',time()-(60*60*24*7));
                }
                header('location: departments.php?user=');
            }
            else
            {
                array_push($errors,"Incorrect Username & Password");
            }
            
        } 
        }

    


    //forget paassword

    if(isset($_POST['request']))
    {
        $username = mysqli_real_escape_string($con,$_POST['username']);

        if(empty($username)){array_push($errors,"Username Required");}

        if(count($errors) == 0)
        {
            $query = "SELECT *FROM members WHERE username='$username'";
            $result= mysqli_query($con,$query);
            if(mysqli_num_rows($result) == 0)
            {
                array_push($errors,"Invalid Username");
            }
            else
            {
                $notify ="Please Send Message to The Administrator: _____________@gmail.com";
            }
        
        }

    }

    //Admin panel

    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        if(empty($username)){array_push($errors,"Username Required");}
        if(empty($password)){array_push($errors,"Password Required");}

        if(count($errors)==0)
        {
            $querry = "SELECT *FROM members WHERE username='$username' AND password='$password'";
            $result = mysqli_query($con,$querry);
            $user1 = mysqli_fetch_assoc($result);

            if($user1)
            {
                if($user1['email']=="tharinduniroshan4@gmail.com")
                {
                   
                    if(isset($_POST['rememberme']))
                    {
                        setcookie('username',$_POST['username'],time()+(60*60*24*7));
                        setcookie('password',$_POST['password'],time()+(60*60*24*7));
                    }
                    else
                    {
                        setcookie('username','',time()-(60*60*24*7));
                        setcookie('password','',time()-(60*60*24*7));
                    }
                    header('location: adminMain.php');
                }
            }
        }

    }

    //delete Quections

    if(isset($_GET['id']))
    {
        $id  = $_GET['id'];

        $querry = "DELETE FROM test WHERE id='$id'";
        $result1 = mysqli_query($con, $querry);
        header('location: admin.php');
    }

    if(isset($_GET['username']))
    {
        $un  = $_GET['username'];

        $querry = "DELETE FROM members WHERE username='$un'";
        $result1 = mysqli_query($con, $querry);
        header('location: adminu.php.php');
    }
    //Delete PDF
    if(isset($_GET['pdfid']))
    {
        $id  = $_GET['pdfid'];

        $querry = "DELETE FROM files WHERE pdfid='$id'";
        $result1 = mysqli_query($con, $querry);
        header('location: adminpdf.php');
    }


?>