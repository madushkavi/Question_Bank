<html>
	<head>
		<title>Import Successfuly</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" type=text/css href=stylesheet.css>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.min.css">
		<style>
		fieldset{
		padding:5px 5px 5px 300px;
		}
		}
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
					<li><span><a href="">Mission</a></span></li>
					<li><span><a href="" class="button">Contact</a></span></li>
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
							<li><a href="level.php">/Level</a></li>
							<li><a href="courses.php">/Courses</a></li>
							<li><a href="Web_Technology">/Web Technology</a></li>
							<li><a href="quections.php">/Quections</a></li>
							<li><a href="insert.php">/Import Quections</a></li>
							<li><a>/ Import Successfuly</a></li>
						</ul>
					</div>
				<div id="main" >

					
					<h2>
					<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "projectquectionbank";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit'])){
	if(!empty($_POST['question']) && !empty($_POST['ansa']) && !empty($_POST['ansb']) && !empty($_POST['ansc']) && !empty($_POST['ansd']) && !empty($_POST['correctone']))
	{
		$course = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_STRING);
		$question = $_POST['question'];
		$ansa =$_POST['ansa'];
		$ansb =$_POST['ansb'];
		$ansc =$_POST['ansc'];
		$ansd =$_POST['ansd'];
		$ca =$_POST['correctone'];
		$wid=1;
		switch()
		$query = "insert into test(course,question,answera,answerb,answerc,answerd,correctOne) values('$course','$question','$ansa','$ansb','$ansc','$ansd','$ca')";	
		$run = mysqli_query($conn,$query) or die(mysqli_error($conn));
		
		if($run){
			echo "Form submitted successfuly";
		}
		else{
			echo "Form not submitted";
		}
    }
	else{
			echo " all fields required";
		}
	
}
 ?>
 <br>
 <br>
 <li><span><a href="insert.php" >Go Back To Insert Quection..</a></span></li>
 
					</h2>
					
				</div>
			</div>
			
			<div id="footer">
			<h4>Contact Us</h4><br>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="text">tharinduniroshan4@gmail.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                        <span class="text">+94 70 3246522</span>
                    </li>
                </ul>
			</div>
		</div>
	</body>
</html>
