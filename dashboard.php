<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	include "header.php";
	include "link.php";
	include "login.php";
?>
<h1 class="nav justify-content-center mx-auto">Dashboard User</h1>
<div class="container">
<a href="add_user.php"><input type="button" class="btn btn-primary btn-sm float-end	 mx-1" name="Adduser" value="Adduser">
</a>
</div>

	<table class="container">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Image</th>
			<th>Address</th>
			<th>Gender</th>
			<th>country</th>
			<th>State</th>
			<th>City</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>parth</td>
			<td>kotak</td>
			<td>parth@gmail.com</td>
			<td><img src="masala.jpeg" height="50px" width="50px"></td>
			<td>vasna</td>
			<td>Male</td>
			<td>India</td>
			<td>Gujarat</td>
			<td>Ahemedabad</td>
			<td>
				<input type="button" class="btn btn-primary" name="Update" value="Update">
				<input type="button" class="btn btn-primary" name="Delete" value="delete">
			</td>
		</tr>
	</table>
<?php
	include "footer.php";
?>
</body>
</html>