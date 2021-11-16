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
	<title> Registration form </title>
</head>

<body>
    
    <form method="post" action="registrationCheck.php" enctype="multipart/form-data">
		<fieldset>
			<legend><font size="11" color="green">
            <b><i>SignUp</i></b></font></legend>
            <div> <?php echo $msg; ?> </div>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="" required></td>
				</tr>
                <tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="cpassword" value="" required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="" required></td>
				</tr>
                <tr>
					<td>Image:</td>
					<td><input type="file" name="file" accept="image/*"></td>
				</tr>
				<tr>
					<td><input type="reset"></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
                <tr>
                    <td colspan="2"><p> Already have an account? <a href="login.php">Log in</a></p></td>
                </tr>
			</table>
		</fieldset>

		
    </form>
</body>

</html>