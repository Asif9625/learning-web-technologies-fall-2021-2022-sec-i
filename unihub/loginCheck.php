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
        $folder="users/".$username;
        
		$msg="";
        if( is_dir($folder) == false )
		{
            $msg = "<font color='red'>* This username is not valid!! </font>";
            $_SESSION['msg']=$msg;
            header("Location: login.php"); die;
        }
        else
        {

            $myfile = fopen('users/info.txt', 'r');
				
            while(!feof($myfile))
            {
                $data = fgets($myfile);
				$user = explode('|', $data);		
				
                //echo "$username: $user[0], $pass : $user[1]";
				if($username == trim($user[0]) && $pass == trim($user[1]))
                {
						setcookie('flag', 'true', time()+3600, '/');
                        if(isset($_SESSION['msg']))
                            unset($_SESSION['msg']);
            
                        $_SESSION['username']=$username;
						header('location: index.php'); die;
				}
                
            }
            
            $msg = "<font color='red'>* Password is wrong!! </font>";
            $_SESSION['msg']=$msg;
            header("Location: login.php"); die;

        }
        
    }
	
?>

<html>
<head>
	<title> Registration form </title>
</head>

<body>
    
    
</body>

</html>