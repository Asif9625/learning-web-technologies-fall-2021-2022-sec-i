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
    
	
?>

<html>
<head>
	<title>Change Profile Photo</title>
</head>

<body>
	
    <form method="post" action="profile_photoChangeCheck.php" enctype="multipart/form-data">
		
        <fieldset>
			<legend><font size="11" color="green">
            <b><i>Change Photo:</i></b></font></legend>
            <div> <?php echo $msg; ?> </div>
			<table>
				<tr>
					<td>New Image:</td>
					<td><input type="file" name="file" accept="image/*"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Upload"></td>
				</tr>
			</table>
		</fieldset>
		
    </form>
    
    
</body>
</html>