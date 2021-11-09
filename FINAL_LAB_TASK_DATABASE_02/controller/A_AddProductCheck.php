<?php
	require_once('../model/usersModel.php');

	if(isset($_POST['save'])){

		$name	= $_POST['name'];
		$buyingPrice = $_POST['buyingPrice'];
		$sellingPrice	= $_POST['sellingPrice'];

		if($name != ""){
			if($buyingPrice != ""){
				if($sellingPrice !=""){

					$user = ['name'=> $name, 'buyingPrice'=>$buyingPrice, 'sellingPrice'=>$sellingPrice];
					$status = addUser($user);

					if($status){
						echo "Data insertion successful";
					}else{
						echo "try again...";
					}

				}else{
					echo "invalid name....";
				}
			}else{
				echo "invalid buying price....";
			}
		}else{
			echo "invalid selling price....";
		}
	}
?>
