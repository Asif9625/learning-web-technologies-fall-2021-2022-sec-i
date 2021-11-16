<?php 
	session_start();

	include("nav.php");
    
    
?>

<html>
<head>
	<title>Login page</title>
</head>

<body>
        <div align="center" style="height:55px;background-color:green">
            
            <form method="post" action="" >
                    <table>
                        <tr>
                            <td><input type="text" name="search" placeholder="Type something to search" style="padding: 15px; width: 800px" required> </td>
                            <td>
                                <select name="type" style="padding: 15px;">
                                    <option value="instructor">Instructor</option>
                                    <option value="course">Course</option>
                                    <option value="job">Job</option>
                                    <option value="company">Company</option>
                                </select>
                            </td>
                            <td> <button type="submit" value=""><img src="img/search_red.png" width="50" height="45"></button> </td>
                        </tr>

                    </table>
            </form>
        </div>
</body>
</html>