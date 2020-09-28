<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_feedback');
 ?>

<table>
	<tr>
		<th>ID</th>
		<th>user_name</th>
		<th>user_email</th>
		<th>user_phone</th>
		<th>user_text</th>
	</tr>
<?php while ($feedback = mysqli_fetch_array($result)) { ?>
 			<tr>
 				<td><?= $feedback['id'] ?></td>
 				<td align="center"><?= $feedback['user_name'] ?></td>
 				<td><?= $feedback['user_email'] ?></td>
 				<td><?= $feedback['user_phone'] ?></td>
 				<td><?= $feedback['user_text'] ?></td>
 				<td align="center"><a href="detail_Product.php?id=<?= $feedback['id']?>">Detail</a> |
 				<a href="edit_product.php?id=<?= $feedback['id'] ?>">Edit</a> |
 				<a onclick="return confirm('Are you really want to delete it??')" href="demo4.php?id=<?= $feedback['id']?>&action=delete">Delete</a>
 				</td>
 			</tr>
 	<?php } ?>
</table>
