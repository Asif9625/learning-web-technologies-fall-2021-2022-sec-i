<?php
	require_once('../model/usersModel.php');
	$result = getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Item List</title>
</head>
<body>

<table>
	<tr>
		<td>
			<fieldset>
				<legend>
					DISPLAY
				</legend>
				<table border="1">
					<tr>
						<th>NAME</th>
						<th>PROFIT</th>
						<th>ACTION</th>
					</tr>

				<?php while($data = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?=$data['name']?></td>
						<td><?=($data['buyingPrice'])-($data['sellingPrice'])?></td>

						<td>
							<a href="C_Edit.php?id=<?=$data['id']?>"> EDIT </a> |
							<a href="D_Delete.php?id=<?=$data['id']?>"> DELETE</a>
						</td>
					</tr>

				<?php } ?>
				</table>
			</fieldset>
		</td>
	</tr>
</table>
</body>
</html>
