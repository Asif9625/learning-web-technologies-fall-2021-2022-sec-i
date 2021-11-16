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
	<title>Login page</title>
</head>

<body>
	<form method="post" action="loginCheck.php">
		<fieldset>
			<legend><font size="11" color="green">
            <b><i>Login</i></b></font></legend>
            <div> <?php echo $msg; ?> </div>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="" placeholder="Enter your username" required> </td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="" placeholder="Enter your password" required></td>
				</tr>
				<tr>
                    <td><input type="reset"></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
                <tr>
                    <td colspan="2"><p> Don't have an account? <a href="registration.php">Register here</a></p></td>
                </tr>
                <tr>
                    <td colspan="2"><p> Forget password? <a href="reset.php">Reset</a></p></td>
                </tr>
			</table>
		</fieldset>
	</form>
</body>
</html>