<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<form method="post" action="doRegister.php">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="txtName">></td>
		</tr>
		<tr>
			<td>Country</td>
			<td>
				<select name="cbcourse">
					<option value="C#">C#</option>
					<option value="Java">java</option>
					<option value="Cloud">cloud</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="Date" name="dob">></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="Gender" value="Male">Male
				<input type="radio" name="Gender" value="Female">Female
			</td>
		</tr>
		<tr>
			<td>Favorite</td>
			<td>
				<input type="checkbox" name="book" value="book">book
				<input type="checkbox" name="book" value="car">cars
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Register"></td>
		</tr>
	</table>
</form>
</body>
</html>