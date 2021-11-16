<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}
    
    
    if(isset($_POST['submit']))
    {
        $username=$_POST['user'];;
        $code=$_POST['code'];
        
        
        $std_course="users/".$username."/course.txt";
        $std_list="courses/".$code."/student.txt";
        
       /* echo "$username<br>$code<br>$std_course<br>$std_list<br>";
        $file_handle = fopen($std_course, 'a');
        fwrite($file_handle, $code."\r\n");
        fclose($file_handle);
        
        $file_handle = fopen($std_list, 'a');
        fwrite($file_handle, $username."\r\n");
        fclose($file_handle);
            
        header("Location: courses.php"); die;*/
        
    }
    else
    {
        header("Location: jobs.php"); die;
    }


    
    
	
?>

<html>
<head>
	<title> Apply for Job </title>
</head>

<body>
    
    <form action="jobCV.php" method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend><font size="11" color="red">
            <b><i>Application for Job</i></b></font></legend>
            
			<table>
				<tr>
					<td>Username:</td>
					<td><?php echo $username; ?><input type="hidden" name="user" value="<?php echo $username; ?>" >
                    </td>
				</tr>
				<tr>
					<td>Job Code: </td>
					<td><?php echo $code; ?><input type="hidden" name="code" value="<?php echo $code; ?>" ></td>
				</tr>
                <tr>
					<td>Write Something</td>
                    <td><textarea></textarea></td>
				</tr>
                <tr>
					<td>CV:</td>
					<td><input type="file" name="file" required></td>
				</tr>
				<tr>
					<td><input type="reset"></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>

		
    </form>
</body>

</html>