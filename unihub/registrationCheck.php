<?php
	
    session_start();
	include 'nav.php';
	
	if(isset($_SESSION['username']))
	{
        header("location: index.php");
		
	}
    

    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $pass=$_POST['password'];
        $cpass=$_POST['cpassword'];
        $email=$_POST['email'];
        $folder="users/".$username;
        
		$msg="";
        if( is_dir($folder) )
		{
            $msg = "<font color='red'>* This username is already exists</font>";
            $_SESSION['msg']=$msg;
            header("Location: registration.php"); die;
        }
        else if($pass != $cpass)
		{
            $msg = "<font color='red'>* Passwords are not the same</font>";
            $_SESSION['msg']=$msg;
            header("Location: registration.php"); die;
        }
        else
        {
            $myfile = fopen('users/info.txt', 'a');
            $myuser = $username."|".$pass."|".$email."\r\n";
            fwrite($myfile, $myuser);
            fclose($myfile);

            mkdir($folder);
            
        
            if( isset($_FILES['file']) && !!($_FILES['file']["tmp_name"]))
            {
                $file=$_FILES['file'];
                $filename=$file["name"];
                $info = explode('.', $filename);
                $extension=end($info);
                if($extension != "jpg")
                {
                    $msg="<font color='red'>* Only jpg format is allowed!</font>";
                    $msg.=$extension;
                    $_SESSION['msg']=$msg;
                    header("Location: registration.php"); die;
                }
                $newfilename=$username.".".$extension;
                move_uploaded_file( $file['tmp_name'], $folder.'/'.$newfilename );
            }
            else
            {
                $org='users/dummy/dummy.jpg';
                $nw=$folder.'/'.$username.'.jpg';
                copy($org,$nw);
            }

            if(isset($_SESSION['msg']))
                unset($_SESSION['msg']);
            
            $_SESSION['username']=$username;
        }
            
        header("Location: index.php"); die;
        
    }
	
?>

<html>
<head>
	<title> Registration form </title>
</head>

<body>
    
    
</body>

</html>