<?php
    require '../controllers/ContactController.php';

    $con = new ContactController;
	$cont = $con->all();
	



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
		<td>Emri</td>
		<td>Telefoni</td>
		<td>Mesazhi</td>
		<td>Delete</td>
	</tr>
	   <?php foreach($cont as $con): ?>
		<tr>
			<td><?php echo $con['emri']; ?></td>
			<td><?php echo $con['phone']; ?></td>
			<td> <p><?php echo $con['message']; ?> </p></td>
			<td><a href="delete-contact.php?id=<?php echo $con['id']; ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
	</table>

    
</body>
</html>