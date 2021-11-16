<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}

    $username=$_SESSION['username'];
    $msg="";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
	{
		
		$folder="users/".$username;
        if( isset($_FILES['file']) )
        {
                $old=$folder."/".$username.".jpg";
                if (file_exists($old))
                {
                    unlink($old);
                }
                else
                {
                    echo "File mossing<br>";
                }
                
                $file=$_FILES['file'];
                $filename=$file["name"];
                $info = explode('.', $filename);
                $extension=end($info);
                if($extension != "jpg")
                {
                    $msg="<font color='red'>* Only jpg format is allowed!</font>";
                    $_SESSION['msg']=$msg;
                }
                else
                {
                    $newfilename=$username.".".$extension;
                    move_uploaded_file( $file['tmp_name'], $folder.'/'.$newfilename );
                    if(isset($_SESSION['msg']))
                        unset($_SESSION['msg']);
                    header("location: profile.php"); die;
                }
                header("location: profile_photoChange.php"); die;
        }
        
		
	}
	
?>