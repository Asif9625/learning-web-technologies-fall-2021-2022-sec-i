<?php 
    session_start();
    include 'functions.php';
	include 'connection.php';


    $file = $_FILES['file'];

    if( is_dir("uploads/".$_SESSION['user_name']) === false )
    {
        mkdir("uploads/".$_SESSION['user_name']);
    }
    
    //already exists?
    $extra="";
    if(file_exists("uploads/".$_SESSION['user_name']."/".$file["name"]))
    {
        $extra="duplicate_".random_num(5)."_";
        $file["name"]=$extra.$file["name"];
        $_FILES['file']['name']=$extra.$_FILES['file']['name'];
    }


    $folder = "uploads/".$_SESSION['user_name']."/";

    move_uploaded_file($file["tmp_name"],$folder.$file["name"]);

    //store in DB
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
	{
		echo uploadNote($_FILES, $_POST, $con);
	}

    header("Location: index.php");

?>