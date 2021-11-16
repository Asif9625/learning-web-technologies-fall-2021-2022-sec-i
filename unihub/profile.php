<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}
    $username=$_SESSION['username'];
    $email="";
    
    $myfile = fopen('users/info.txt', 'r');
				
    while(!feof($myfile))
    {
        $data = fgets($myfile);
        $user = explode('|', $data);		
				
        if($username == trim($user[0]))
        {
            $username=$user[0];
            $email=$user[2];
        }     
    }
	
?>

<html>
<head>
	<title>Profile</title>
</head>

<body>
	
    <div align="center"> <?php echo '<img src="users/'.$username.'/'.$username.'.jpg" width="25% height="20%>' ?> </div>
    <div align="center"> <a href="profile_photoChange.php">Change Photo</a> </div>
    
    <fieldset>
			<legend><font size="11" color="green">
            <b><i>Informations:</i></b></font></legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><?php echo $username; ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?php echo $email; ?></td>
                </tr>
				<tr>
                    <td></td>
					<td></td>
				</tr>
                <tr>
                    <td colspan="2"><p> <a href="profileEdit.php">Edit Profile Info</a></p></td>
                </tr>
                <tr>
                    <td colspan="2"><p> <a href="passUpdate.php">Update Password</a></p></td>
                </tr>
        
			</table>
		</fieldset>
        
    <fieldset>
			<legend><font size="10" color="orange">
            <b><i>Enrolled Courses:</i></b></font></legend>
	        <?php 
                    $std="users/".$_SESSION['username']."/course.txt";
                    if( !file_exists($std) )
                    {
                        $file = fopen($std, 'w');
                        fclose($file);
                    }
                    $file = fopen($std, 'r');
                    
                    $empty="You didn't enroller any courses yet!!<br>Check <a href='courses.php'> courses </a>";
                    
                    while(!feof($file))
                    {
                        $random_color = '#'.substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                        $code = fgets($file);
                        if(empty($code))
                            continue;
                        echo "<p> <font color=".$random_color." > ".$code."</font> </p>";
                        $empty="";

                    }
                    echo $empty;
                    fclose($file);
            ?>		
    </fieldset>
    
</body>
</html>