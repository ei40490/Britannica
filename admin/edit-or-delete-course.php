<?php
    require '../controllers/KursetController.php';

    $kurs = new KursetController;
	$kurset = $kurs->all();
	



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
		<td>Titulli</td>
		<td>Pershkrimi</td>
		<td>Foto</td>
		<td>Update</td>
	</tr>
	   <?php foreach($kurset as $kurs): ?>
		<tr>
			<td><?php echo $kurs['id']; ?></td>
			<td><?php echo $kurs['titulli']; ?></td>
			<td> <p><?php echo $kurs['pershkrimi']; ?> </p></td>
			<td> <img width="150" height="100" src="../images/<?php echo $kurs['foto'];?>" /> </td>
			<td><a href="edit-course.php?id=<?php echo $kurs['id']; ?>">Edit</a> |   <a href="delete-course.php?id=<?php echo $kurs['id']; ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
	</table>

    
</body>
</html>