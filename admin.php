<?php include('server.php') ?>
<?php include('server1.php') ?>
<html>
	<head>
		<title>Admin Pannel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" type=text/css href=styleadmin.css>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
		<style>
		#main{
		padding:100px 5px 100px 200px;
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
					<li><span><a href="">LMS</a></span></li>
					<li><span><a href="" class="button">Contact</a></span></li>
					<li><span><a href="login.php" class="lg">Log Out</a></span></li>
					<!-- On the line above, remove the class="button" if you don't want the final
					element to be a button -->
				</nav>
			</div>
		</header>
			
			
			<div id="content">
                <div class="locations">
					<ul>
						<li><a href="adminMain.php">Admin Home</a></li>
						<li><a href="admin.php">/   Check Quections</a></li>
					</ul>
					
				</div>	
                <div class="table">
                    <table>
                        <tr> 
                            <th >Q No</th>
                            <th >Quection </th>
                            <th >Answer A </th>
                            <th >Answer B </th>
                            <th >Answer C </th>
                            <th >Answer D </th>
                            <th >Correct Answer </th>
                            <th >Response </th>
                        </tr>
                        <tbody>
                            <?php 
                                $con = mysqli_connect('localhost','root','','projectquectionbank');

                                if(mysqli_connect_errno())
                                {
                                    echo "Database is not Connect:".mysqli_connect_error();
                                    exit();
                                }
                                $query= "SELECT * FROM test";
                                $result =mysqli_query($con,$query);
                                while($user=mysqli_fetch_assoc($result))
                                {
                            ?>
                            <tr>
                                <td><?php echo $user['ID']?></td>
                                <td><?php echo $user['question']?></td>
                                <td><?php echo $user['answera']?></td>
                                <td><?php echo $user['answerb']?></td>
                                <td><?php echo $user['answerc']?></td>
                                <td><?php echo $user['answerd']?></td>
                                <td><?php echo $user['correctOne']?></td>
                                <td> 
                                    <a href='server.php?id=<?php echo $user['ID']?>' class='btn'>Delete</a> 
                                    <a href='server1.php?id=<?php echo $user['ID']?>' class='btn'>Approve</a> 
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
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

