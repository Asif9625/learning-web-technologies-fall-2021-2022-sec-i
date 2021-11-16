<?php
	
    session_start();
	include 'nav.php';
	
	if(isset($_SESSION['username']))
	{
        header("location: index.php");
		
	}
	$msg="";
    if(isset($_SESSION['msg']))
	{
		$msg=$_SESSION['msg'];
	}
?>


<html>
<head>
	<title> Password Reset </title>
</head>

<body>

	<form action="resetCheck.php" method="POST">
		<fieldset>
			<legend><font size="11" color="green">
            <b><i>Reset Password</i></b></font></legend>
            <div> <?php echo $msg; ?> </div>
			<table>
                <tr>
					<td>Your Username:</td>
					<td><input type="text" name="user" required></td>
				</tr>
				<tr>
					<td>Your Email:</td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td>New Password:</td>
					<td><input type="password" name="password" required></td>
				</tr>
                <tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="cpassword" required></td>
				</tr>
				
				<tr>
					<td><input type="reset" value="Reset"></td>
					<td><input type="submit" name="submit" value="Change"></td>
				</tr>
			</table>
		</fieldset>
    </form>
</body>

</html>