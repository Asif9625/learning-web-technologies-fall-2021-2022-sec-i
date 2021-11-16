<?php
	
    session_start();
	include 'nav.php';
	
	if(!isset($_SESSION['username']))
	{
        header("location: login.php");
		
	}
    
  
    
    






    $folder = "companies";
    
    echo '
          <table border="1" cellpadding="15%" cellspacing="0" width="100%">
                <tr>
                    <th width="70%" align="center">Company Name</th>
                    <th width="30%" align="center">Job Posts</th>
                </tr>  
        ';

    $files = scandir($folder);
    
    for($i=0; $i<count($files); $i++)
    {
        if($files[$i] == "." || $files[$i]=="..")
            continue;
        
        $name = $files[$i];
        $job_list=$folder."/".$name."/jobs.txt";
        $cnt = 0;
        $tmp_file = fopen($job_list, "r");
        
        while(!feof($tmp_file))
        {
            $line = fgets($tmp_file);
            
            if(empty($line))
                continue;

            $cnt++;
        }

        fclose($tmp_file);
        
        
        echo '
                <tr>
                    <td>'.$name.'</td>
                    <td> <a href="companiesJob.php?file='.$job_list.'" >'.$cnt.'</a></td>
                </tr>
            ';

    }
    
    echo ' </table> ';

	
?>

<html>
<head>
	<title>Companies</title>
</head>

<body>
            
</body>
</html>