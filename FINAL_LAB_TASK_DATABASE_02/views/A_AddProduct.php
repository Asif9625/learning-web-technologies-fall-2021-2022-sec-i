<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<form method="post" action="../controller/A_AddProductCheck.php">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			<table>

				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value=""></td>
				</tr>

				<tr>
					<td>Buying price:</td>
					<td><input type="text" name="buyingPrice" value=""></td>
				</tr>

				<tr>
					<td>Selling price:</td>
					<td><input type="text" name="sellingPrice" value=""></td>
				</tr>

				<tr>
					<td><input type="checkbox" name="display" value=""> Display</td>
					<td></td>
				</tr>

				<tr>
					<td><input type="submit" name="save" value="Save"></td>
					<td></td>
				</tr>

			</table>
		</fieldset>
	</form>
</body>
</html>
