<?php include('fileslogic.php') ?>
<html>
	<head>
		<title>Upload Answers</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href=stylesheet.css?v=1>
		<style>
		body{
	
	max-width:100%;height:auto;
	background-size: cover;
}

.row{
	align : center;
}
table{
	width:60%;
	border-collapse:collapse;
	margin:100px auto;
}
th,td{
	height: 50px;
	vertical-align: center;
	boreder:1px solid black;
}
	</style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.min.css">
		<style>
		#main{
		padding:25px 5px 100px 50px;
		}
		fieldset{
		padding:5px 5px 5px 300px;
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
						<li><a href="insert.php">/   Download Quections</a></li>
					</ul>
				</div>
				<div id="main" >
					<h2 align = "center">Records from Database</h2>
					<table>
						<thead>
							<th>ID</th>
							<th>FileName</th>
							<th>Size</th>
							<th>Download</th>
							<th>Action</th>
						</thead>
						<tbody>
						<?php foreach ($files as $file): ?>
						<tr>
							<td><?php echo $file['pdfid']; ?></td>
							<td><?php echo $file['name']; ?></td>
							<td><?php echo $file['size']/1000 . "KB"; ?></td>
							<td><?php echo $file['downloads']; ?></td>
							<td>
							<a href="index1.php?file_id=<?php echo $file['pdfid'] ?>">Download</a>
							</td>
						</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
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