<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}
    
    if(isset($_GET['file']))
    {
        $file = $_GET['file'];
        if(!file_exists($file))
        {
            header("location: companies.php"); die;
        }
        $tmp_file = fopen($file, "r");
        $empty="<font color='red'>This copany didn't post any Job yet!</font>";
        while(!feof($tmp_file))
        {
            $line = fgets($tmp_file);
            
            if(empty($line))
                continue;
            viewJobs(trim($line));
            $empty="";
        }
        echo $empty;
        fclose($tmp_file);
        
    }
    else
    {
        header("location: companies.php");
    }
    

    function viewJobs($code)
    {
        $folder = "jobs/".$code;
        $info = $folder."/info.txt";
        $std = $folder."/applicant.txt";
        
        $myfile = fopen($info, 'r');
        $data = fgets($myfile);
        $jobInfo = explode('|', $data);
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
                  <form method="post" action="jobApply.php">
                    <fieldset>
                        <legend><font size="11" color='.$random_color.' >
                        <b><i>'.$code.'</i></b></font></legend>
                        <table>
                            <tr>
                                <td>Job Title:</td>
                                <td>'.$jobInfo[0].'</td>
                            </tr>
                            <tr>
                                <td> Company Name:</td>
                                <td>'.$jobInfo[1].'</td>
                            </tr>
                            <tr>
                                <td>Requirments:</td>
                                <td>'.$jobInfo[2].'</td>
                            </tr>
                            <tr>
                                <td>Working Hour:</td>
                                <td>'.$jobInfo[3].'</td>
                            </tr>
                            <tr>
                                <td>Salary:</td>
                                <td>'.$jobInfo[4].'</td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="code" value='.$code.' ></td>
                                <td><input type="hidden" name="user" value='.$_SESSION["username"].' ></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Apply"></td>
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
                                <td>Job Title:</td>
                                <td>'.$jobInfo[0].'</td>
                            </tr>
                            <tr>
                                <td> Company Name:</td>
                                <td>'.$jobInfo[1].'</td>
                            </tr>
                            <tr>
                                <td>Requirments:</td>
                                <td>'.$jobInfo[2].'</td>
                            </tr>
                            <tr>
                                <td>Working Hour:</td>
                                <td>'.$jobInfo[3].'</td>
                            </tr>
                            <tr>
                                <td>Salary:</td>
                                <td>'.$jobInfo[4].'</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button>Already Applied</button></td>
                            </tr>
                        </table>
                    </fieldset>
                <br>
            ';
        }
				
    }
?>