<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_event');
 ?>

<table>
	<tr>
		<th>ID</th>
		<th>Titel</th>
		<th>Detail</th>
		<th>Date</th>
		<th>Description</th>
	</tr>
<?php while ($event = mysqli_fetch_array($result)) { ?>
 			<tr>
 				<td><?= $event['id'] ?></td>
 				<td align="center"><?= $event['title'] ?></td>
 				<td><?= $event['detail'] ?></td>
 				<td><?= $event['date'] ?></td>
 				<td><?= $event['description'] ?></td>
 				<td align="center"><a href="detail_Product.php?id=<?= $event['id']?>">Detail</a> |
 				<a href="edit_product.php?id=<?= $event['id'] ?>">Edit</a> |
 				<a onclick="return confirm('Are you really want to delete it??')" href="demo4.php?id=<?= $event['id']?>&action=delete">Delete</a>
 				</td>
 			</tr>
 	<?php } ?>
</table>
