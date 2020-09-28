<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_ticket');
 ?>

<table>
	<tr>
		<th>ID</th>
		<th>Titel</th>
		<th>Detail</th>
		<th>Date</th>
		<th>Description</th>
	</tr>
<?php while ($ticket = mysqli_fetch_array($result)) { ?>
 			<tr>
 				<td><?= $ticket['id'] ?></td>
 				<td align="center"><?= $ticket['name'] ?></td>
 				<td><?= $ticket['type'] ?></td>
 				<td><?= $ticket['price'] ?></td>
 				<td><?= $ticket['date_booked'] ?></td>
 				<td align="center"><a href="detail_Product.php?id=<?= $ticket['id']?>">Detail</a> |
 				<a href="edit_product.php?id=<?= $ticket['id'] ?>">Edit</a> |
 				<a onclick="return confirm('Are you really want to delete it??')" href="demo4.php?id=<?= $ticket['id']?>&action=delete">Delete</a>
 				</td>
 			</tr>
 	<?php } ?>
</table>
