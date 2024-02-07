
<html>
    <head>
        <title>Sign Up page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signupstyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@700&family=Josefin+Sans:wght@700&display=swap" rel="stylesheet"
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="container">
            <div class="header">
                    <img src="logo1.png" height="100px" width="100px">
                    <h1>UOJ - Faculty Of Science Quection Bank</h1>
            </div>
            <div class="form">
                    <form method="post" >
                        <h1> Sign Up </h1>
                        <?php include('server.php') ?>
                        <h2><?php include('errors.php'); ?></h2>
                        <h3><?php include('notify.php'); ?></h3>
                        <div class="text">
                            <input type="text" name="fullname" placeholder=" Your Full Name" >
                        </div>
                        <div class="username">
                            <input type="text" name="username" placeholder=" Username">
                        </div>
                        <div class="email">
                            <input type="email" name="email" placeholder=" Email">
                        </div>
                        <div class="password">
                            <input type="password" name="password" placeholder=" Password" >
                        </div>
                        <div class="password">
                            <input type="password" name="password1" placeholder=" Confirm Password" >
                        </div>
                        <div class="signup">
                            <button type="submit" class="btn" name="signup">Sign Up</button>
                        </div>
                        
                        <span class="login">Already Register? <a href="login.php">Log In</a></span>
                    </form>
            </div>
        </div>
    </body>

</html>