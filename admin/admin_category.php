<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_category');
 ?>

<table>
	<tr>
		<th>ID</th>
		<th>Species Name</th>
	</tr>
<?php while ($category = mysqli_fetch_array($result)) { ?>
 			<tr>
 				<td><?= $category['id'] ?></td>
 				<td align="center"><?= $category['species_name'] ?></td>
 				<td align="center"><a href="detail_Product.php?id=<?= $category['id']?>">Detail</a> |
 				<a href="edit_product.php?id=<?= $category['id'] ?>">Edit</a> |
 				<a onclick="return confirm('Are you really want to delete it??')" href="demo4.php?id=<?= $category['id']?>&action=delete">Delete</a>
 				</td>
 			</tr>
 	<?php } ?>
</table>
