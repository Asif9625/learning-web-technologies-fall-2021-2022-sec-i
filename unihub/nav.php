<?php

    
?>

<html>
<head>
	
</head>
    
<body>

    <hr>
	<table border="0" width="100%">
		<tr height="50px">
            <td>
                <b><font size="13" color="blue"> UniHub </font></b>
            </td>
            
            <?php
                if(isset($_SESSION['username']))
                {
                    echo '<td align="right">
				            <a href="index.php">Home</a> |
                            <a href="profile.php">Profile</a> |
                            <a href="courses.php">Courses</a> |
                            <a href="jobs.php">Jobs</a> |
                            <a href="companies.php">Companies</a> |
                            <a href="search.php">Search</a> |
                            <a href="logout.php">LogOut</a> 
			             </td>
                         ';
                }
                else
                {
                    echo '<td align="right">
                            <a href="index.php">Home</a> |
				            <a href="login.php">LogIn</a> |
                            <a href="registration.php">SignUp</a>
			              </td>
                          ';
                }
            ?>
			
		</tr>
	</table>
    <p><hr></p>
</body>
</html>