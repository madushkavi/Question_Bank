<html>
	<head>
		<title>Upload Answers</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href=stylesheet.css?v=1>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.min.css">
		<style>
		#main{
    	padding-top:50px;
		padding-right:50px;
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
					
					<li><span><a href="" >Home</a></span></li>
					<li><span><a href="" >About us</a></span></li>
					<li><span><a href="">Mission</a></span></li>
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
						<li><a href="level.php">/  Level</a></li>
						<li><a href="courses.php">/   Courses</a></li>
						<li><a href="Web_Technology.php">/   Web Technology</a></li>
						<li><a href="quections.php">/   Quections</a></li>
						<li><a href="insert.php">/   Import Quections</a></li>
					</ul>
				</div>
				<div id="main" >

					
					<h2>
					<form id="form" action="connect.php" method="POST">
						
						<fieldset >		
                    <legend  ><h3>Enter question</h3></legend>
					<label3> Select Course :        </label3>
						<select name="course" id="course">
							<option value="profpract">Professional Practise</option>
							<option value="bioinfor">Bioinformatics</option>
							<option value="web">Web Technology</option>
							<option value="os">Operatin System</option>
							<option value="se">Software Engineering</option>
						</select><br>
						<label3> Question :        </label3>
						   <textarea name="question" cols="39" rows="9" required></textarea><br>
						   
						<label3> Answer a :        </label3>
							<input type="text" id="ansa" name="ansa" size="20" required><br>
						<label3> Answer b :        </label3>
							<input type="text" id="ansb" name="ansb" size="20" required><br>
						<label3> Answer c :        </label3>
							<input type="text" id="ansc" name="ansc" size="20" required><br>
						<label3> Answer d :        </label3>
							<input type="text" id="ansd" name="ansd" size="20" required><br>
						<label3> Correct Answer:        </label3>
							<input type="text" id="ansd" name="correctone" size="20" required><br><br>
						<input class="submit" name="submit" type="submit" value="Upload">  <br><br>
				</fieldset>
					</form>
					
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