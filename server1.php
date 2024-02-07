<?php
    

    //connect to the database
    $con = mysqli_connect('localhost','root','','projectquectionbank');

    //check database is connect
    if(mysqli_connect_errno())
    {
        echo "Database is not connect:".mysqli_connect_error();
        exit();
    }

    //Approve Quections
    if(isset($_GET['id']))
    {

        $id  = $_GET['id'];

        $check = "SELECT *FROM test where id='$id'";
        $result = mysqli_query($con,$check);
        $row = mysqli_fetch_assoc($result);

        if($row)
        {
            $quec = $row['question'];
            $a = $row['answera'];
            $b = $row['answerb'];
            $c = $row['answerc']; 
            $d = $row['answerd'];
            $ca =$row['correctOne'];
            $co=$row['course'];
            
        }
        
        
        //$querry = "INSERT INTO approveq (question, answera, answerb, answerc, answerd, corrrectOne) VALUES ('$quec','$a','$b','$c','$d','$ca')";
        $querry = "INSERT INTO `approveq`(`question`, `answera`, `answerb`, `answerc`, `answerd`, `correctOne`) VALUES ('$quec','$a','$b','$c','$d','$ca')";
        $re=mysqli_query($con,$querry);	
		
        
        //Delete Approve Quections in Old Database
    
        if($re)
        {
            $query = "DELETE FROM test WHERE id='$id'";
            $result2 = mysqli_query($con, $query);
            header('location: admin.php');
        }

    }

?>