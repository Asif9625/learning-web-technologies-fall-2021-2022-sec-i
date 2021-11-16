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
        $file=$_FILES['file'];
        
        $applicant_list="jobs/".$code."/applicant.txt";
        
        
        $file_handle2 = fopen($applicant_list, 'a');
        fwrite($file_handle2, $username."\r\n");
        fclose($file_handle2);
        
        $filename=$file["name"];
        $info = explode('.', $filename);
        $extension=end($info);
        $newfilename=$username."_cv.".$extension;
        if(move_uploaded_file( $file['tmp_name'], 'jobs/'.$code.'/'.$newfilename ))
            echo "CV moved";
        else
            echo "Error in moving";
            
        header("Location: jobs.php"); die;
        
    }    
	
?>