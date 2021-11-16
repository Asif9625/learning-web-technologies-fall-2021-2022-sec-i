<?php
	
    session_start();
	include 'nav.php';
	
	if(isset($_SESSION['username']))
	{
        header("location: index.php");
		
	}
    

    if(isset($_POST['submit']))
    {
        $username=$_POST['user'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $cpass=$_POST['cpassword'];
        $folder="users/".$username;
		 
        
        $msg="";
        if( !is_dir($folder) )
		{
            $msg = "<font color='red'>* This username is not valid</font>";
            $_SESSION['msg']=$msg;
            header("Location: reset.php"); die;
        }
        if($pass != $cpass)
		{
            $msg = "<font color='red'>* Passwords are not the same</font>";
            $_SESSION['msg']=$msg;
            header("Location: reset.php"); die;
        }
        
        $myfile = fopen('users/info.txt', 'r');
		$changed="";		
        while(!feof($myfile))
        {
                $data = fgets($myfile);
				$user = explode('|', $data);		
				
                $data0=trim($user[0]);
                if(empty($data0))
                    continue;
                $data1=trim($user[1]);
                $data2=trim($user[2]);
                
				if($username == $data0)
                {
                    if($email != $data2)
                    {
                        $msg = "<font color='red'>* Email address is wrong!</font>";
                        $_SESSION['msg']=$msg;
                        header("Location: reset.php"); die;
                    }
				    $data1=$pass;
				}
                $myuser = $data0."|".$data1."|".$data2."\r\n";
                $changed=$changed.$myuser;
        }
            
        if(isset($_SESSION['msg']))
                unset($_SESSION['msg']);
        file_put_contents('users/info.txt', $changed); 
        
        $_SESSION['username']=$username;
        header('location: index.php'); die;
        
    }
	
?>

<html>
<head>
	<title> Registration form </title>
</head>

<body>
    
    
</body>

</html>