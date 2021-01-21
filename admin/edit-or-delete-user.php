<?php
    require '../controllers/UserController.php';

    $user = new UserController;
	$users = $user->all();
	
	



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>

<?php include 'includes/side.php'; ?>

<table width='80%' >

	<tr bgcolor='#CCCCCC'>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Admin/user</td>
		<td>Update</td>
	</tr>
	   <?php foreach($users as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['is_admin'] == 1 ? "Admin"  : "User"; ?></td>
			<td><a href="edit-user.php?id=<?php echo $user['id']; ?>">Edit</a> |   <a href="delete-user.php?id=<?php echo $user['id']; ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
	</table>

    
</body>
</html>