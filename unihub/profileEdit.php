<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}

    $username=$_SESSION['username'];
    $msg="";
    if(isset($_SESSION['msg']))
	{
		$msg=$_SESSION['msg'];
	}
    $email="";
    $pass="";
    $myfile = fopen('users/info.txt', 'r');
				
    while(!feof($myfile))
    {
        $data = fgets($myfile);
        $user = explode('|', $data);		
				
        if($username == trim($user[0]))
        {
            $username=$user[0];
            $pass=$user[1];
            $email=$user[2];
        }     
    }
    fclose($myfile);
    
	
?>

<html>
<head>
	<title>Change Profile Photo</title>
</head>

<body>
	
    <form method="post" action="profileEditCheck.php">
		
        <fieldset>
			<legend><font size="11" color="green">
            <b><i>Change Info:</i></b></font></legend>
            <div> <?php echo $msg; ?> </div>
			<table>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="<?php echo $email; ?>" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?php echo $pass; ?>" required></td>
				</tr>
                <tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="cpassword" value="<?php echo $pass; ?>" required></td>
				</tr>
				
				<tr>
					<td><input type="reset" value="Original"></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
		
    </form>
    
    
</body>
</html>