<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}
    

    if(isset($_POST['submit']))
    {
        $username=$_SESSION['username'];
        $pass=$_POST['password'];
        $cpass=$_POST['cpassword'];
        $email=$_POST['email'];
        
		$msg="";
        
        if($pass != $cpass)
		{
            $msg = "<font color='red'>* Passwords are not the same</font>";
            $_SESSION['msg']=$msg;
            header("Location: profileEdit.php"); die;
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
				    $data1=$pass;
                    $data2=$email;
				}
                $myuser = $data0."|".$data1."|".$data2."\r\n";
                $changed=$changed.$myuser;
                echo "$data0 $data1 $data2 <br>";
        }
            
        if(isset($_SESSION['msg']))
                unset($_SESSION['msg']);
        file_put_contents('users/info.txt', $changed); 
        echo $changed;
        header("Location: profile.php"); die;

        
    }
	
?>