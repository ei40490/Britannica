< <?php
    require '../controllers/LajmetController.php';

    $lajm = new LajmetController;
	$lajmet = $lajm->all();
	
	


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
	   <?php foreach($lajmet as $lajm): ?>
		<tr>
			<td><?php echo $lajm['id']; ?></td>
			<td><?php echo $lajm['titulli']; ?></td>
			<td> <p><?php echo $lajm['pershkrimi']; ?> </p></td>
			 <td> <img width="150" height="100" src="../images/<?php echo $lajm['foto'];?>" /> </td>
			<td><a href="edit-news.php?id=<?php echo $lajm['id']; ?>">Edit</a> |   <a href="delete-news.php?id=<?php echo $lajm['id']; ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
	</table>

    
</body>
</html>