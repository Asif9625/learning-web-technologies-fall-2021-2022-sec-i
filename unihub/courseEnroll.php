<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}
    
    
    if(isset($_POST['submit']))
    {
        $username=$_POST['user'];;
        $code=$_POST['code'];
        
        
        echo $_POST['code']." here post";
        $std_course="users/".$username."/course.txt";
        $std_list="courses/".$code."/student.txt";
        
        echo "$username<br>$code<br>$std_course<br>$std_list<br>";
        $file_handle = fopen($std_course, 'a');
        fwrite($file_handle, $code."\r\n");
        fclose($file_handle);
        
        $file_handle = fopen($std_list, 'a');
        fwrite($file_handle, $username."\r\n");
        fclose($file_handle);
            
        header("Location: courses.php"); die;
        
    }


    
    
	
?>