<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}
    
  
    function viewCourse($code)
    {
        $folder = "courses/".$code;
        $info = $folder."/info.txt";
        $std = $folder."/student.txt";
        
        if( is_dir($folder) === false )
        {
            mkdir($folder);
        }
        
        $myfile = fopen($info, 'r');
        $data = fgets($myfile);
        $courseInfo = explode('|', $data);
        fclose($myfile);
        
        $file = fopen($std, 'r');
        $enrolled=0;
        
        while(!feof($file))
        {
            $user = fgets($file);		

            if(trim($user) == trim($_SESSION["username"]))
            {
                $enrolled=1;
                break;
            }

        }
        fclose($file);
        
        $random_color = '#'.substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        if($enrolled == 0)
        {
            echo '
                <form method="post" action="courseEnroll.php">
                    <fieldset>
                        <legend><font size="11" color='.$random_color.' >
                        <b><i>'.$code.'</i></b></font></legend>
                        <table>
                            <tr>
                                <td>Course Name:</td>
                                <td>'.$courseInfo[0].'</td>
                            </tr>
                            <tr>
                                <td>Course Code:</td>
                                <td>'.$code.'</td>
                            </tr>
                            <tr>
                                <td>Course Instructor:</td>
                                <td>'.$courseInfo[1].'</td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="code" value='.$code.' ></td>
                                <td><input type="hidden" name="user" value='.$_SESSION["username"].' ></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Enroll"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
                <br>
            ';
        }
        else
        {
            echo '
                    <fieldset>
                        <legend><font size="11" color='.$random_color.' >
                        <b><i>'.$code.'</i></b></font></legend>
                        <table>
                            <tr>
                                <td>Course Name:</td>
                                <td>'.$courseInfo[0].'</td>
                            </tr>
                            <tr>
                                <td>Course Code:</td>
                                <td>'.$code.'</td>
                            </tr>
                            <tr>
                                <td>Course Instructor:</td>
                                <td>'.$courseInfo[1].'</td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td><button>Already Enrolled</button></td>
                            </tr>
                        </table>
                    </fieldset>
                <br>
            ';
        }
				
    }
    
    $folder = "courses";
    if( is_dir($folder) === false )
    {
        mkdir($folder);
    }
    
    
    $files = scandir($folder);
   
    for($i=0; $i<count($files); $i++)
    {
        if($files[$i] == "." || $files[$i]=="..")
            continue;
    
        viewCourse($files[$i]);

    }

	
?>

<html>
<head>
	<title>Courses</title>
</head>

<body>
	
</body>
</html>