<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}
    $username=$_SESSION['username'];
    $email="";
    
    $msg="";
    if(isset($_SESSION['msg']))
	{
		$msg=$_SESSION['msg'];
	}
	
?>

<html>
<head>
	<title>Change password</title>
</head>

<body>
	
    <form method="post" action="passUpdateCheck.php">
		<fieldset>
			<legend><font size="11" color="green">
            <b><i>Change password</i></b></font></legend>
            <div> <?php echo $msg; ?> </div>
			<table>
				
				<tr>
					<td>New Password:</td>
					<td><input type="password" name="password" value="" placeholder="Enter new password" required></td>
				</tr>
                <tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="cpassword" value="" placeholder="Enter the password again" required></td>
				</tr>
				<tr>
                    <td><input type="reset"></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
                
			</table>
		</fieldset>
	</form>
 
    
</body>
</html>