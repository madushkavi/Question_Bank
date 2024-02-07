<?php 
$conn = mysqli_connect("localhost","root","","projectquectionbank");

$sql = "SELECT * FROM files";
$result = mysqli_query($conn,$sql);
$files = mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_POST['save'])){
	$filename = $_FILES['myfile']['name'];
	$destination = 'uploads/'.$filename;
	$extension = pathinfo($filename,PATHINFO_EXTENSION);
	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];
	if(!in_array($extension,['pdf']))
	{
		echo "Your file extension must be .pdf ";
	}
	elseif($_FILES['myfile']['size']>8000000){
		echo "file is too large";
	}
	else{
		if(move_uploaded_file($file,$destination)){
			$sql = "INSERT INTO files(name,size,downloads)
			VALUES ('$filename','$size',0)";
			if(mysqli_query($conn,$sql)){
				echo "file uploaded successfully";
			}
			else{
				echo "failed to upload file";
			}
		}
	}
	
}

if(isset($_GET['file_id'])){
	$id = $_GET['file_id'];
	$sql = "SELECT * FROM files WHERE pdfid=$id";
	$result = mysqli_query($conn,$sql);
	$file = mysqli_fetch_assoc($result);
	$filepath = 'uploads/'.$file['name'];
	if(file_exists($filepath))
	{
		header('Content-type: application/octet-stream');
		header('Content-Description: File Transfer');
		header('Content-Disposition: attachment; filename=' .
		basename($filepath));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma:public');
		header('Content-Length:' . filesize('uploads/' .$file['name']));
		readfile('uploads/' . $file['name']);
		
		$newCount = $file['downloads'] + 1;
		$updatQuery = "UPDATE files SET downloads=$newCount WHERE pdfid=$id";
		mysqli_query($conn,$updatQuery);
		exit;
	}
}
 ?>