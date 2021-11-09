<?php
	require_once('../model/usersModel.php');
	$id = $_REQUEST['id'];
	$user = getUserById($id);
?>

<html>
<head>
	<title>Delete item</title>
</head>
<body>

<table>
	<tr>
		<td>
			<form method="post" action="../controller/D_DeleteCheck.php">
				<fieldset>
					<legend>DELETE PRODUCT</legend>
					<table>

						<tr>
							<td>Name:</td>
							<td><?=$user['name']?></td>
						</tr>

						<tr>
							<td>Buying price:</td>
							<td><?=$user['buyingPrice']?></td>
						</tr>

						<tr>
							<td>Selling price:</td>
							<td><?=$user['sellingPrice']?></td>
						</tr>

						<tr>
							<td>Displayable:</td>
							<td>Yes</td>
						</tr>

						<tr>
							<td><input type="submit" name="delete" value="Delete"></td>
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
