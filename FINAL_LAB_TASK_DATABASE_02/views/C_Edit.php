<?php
	require_once('../model/usersModel.php');
	$id = $_REQUEST['id'];
	$user = getUserById($id);
?>

<html>
<head>
	<title>Edit item</title>
</head>
<body>

<table>
	<tr>
		<td>
			<form method="post" action="../controller/C_EditCheck.php">
				<fieldset>
					<legend>EDIT PRODUCT</legend>
					<table>

						<tr>
							<td>Name:</td>
							<td><input type="text" name="name" value="<?=$user['name']?>"></td>
						</tr>

						<tr>
							<td>Buying price:</td>
							<td><input type="text" name="buyingPrice" value="<?=$user['buyingPrice']?>"></td>
						</tr>

						<tr>
							<td>Selling price:</td>
							<td><input type="text" name="sellingPrice" value="<?=$user['sellingPrice']?>"></td>
						</tr>

						<tr>
							<td><input type="checkbox" name="display" value=""> Display</td>
							<td></td>
						</tr>

						<tr>
							<td><input type="submit" name="save" value="Save"></td>
							<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
						</tr>

					</table>
				</fieldset>
			</form>
		</td>
	</tr>
</table>
</body>
</html>
