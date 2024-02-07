<html>
	<head>
		<title>Web Technology</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" type=text/css href=stylesheet.css?v=1>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
		<style>
		a{
		color:black;
		text-decoration:none;}
		</style>
		</head>
	<body  >
		<div id="container">
			<header>
			<div class="inner">
				<div class="logo">
					<div>
						<!-- The below line can be an image or a h1, either will work -->
						<img src="uoj_logo.png" alt="Google logo">
						
						<!-- <h1>My Logo</h1> -->
					</div>
					
				</div>
				<nav>
					<!-- Each of the below lines look complicated. There is a reason for this markup though!
					<li> tag will be the container for the table.
					<span> will be the part that centers the content inside it
					<a> is the actual clickable part -->
					
					<li><span><a href="departments.php" >Home</a></span></li>
					<li><span><a href="" >About us</a></span></li>
					<li><span><a href="">LMS</a></span></li>
					<li><span><a href="" class="button">Contact</a></span></li>
					<li><span><a href="login.php" class="lg">Log Out</a></span></li>
					<!-- On the line above, remove the class="button" if you don't want the final
					element to be a button -->
				</nav>
			</div>
		</header>
			
			
			<div id="content">	
				<!--</div><div id="side-bar-left">
					<a id="link" href="http://www.google.com/">link</a>
				</div>-->
				<div class="locations">
					<ul>
						<li><a href="departments.php">Site Home</a></li>
						<li><a href="level.php">/   Level</a></li>
						<li><a href="courses.php">/   Courses</a></li>
						<li>/   Web Technology</a></li>
					</ul>
				</div>
				<div id="main" >
					<h2>
					<label>1. 
					<a id="link" href="pastpapers.php">Past Papers</a></label><br><br>
					<label>2.
					<a id="link" href="quections.php?cname=web">Questions</a></label>
					</h2>
				</div>
			</div>
			
			<div id="footer">
			    <h4>Contact Us</h4><br>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="text">---------------4@gmail.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                        <span class="text">+94 -- --- ----</span>
                    </li>
                </ul>
            </div>
		</div>
	</body>
</html>
