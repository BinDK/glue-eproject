<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_animal');
 ?>
<h1> Anh Dien</h1>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Photo</th>
		<th>Category</th>
	</tr>
<?php while ($animal = mysqli_fetch_array($result)) { ?>
 			<tr>
 				<td><?= $animal['id'] ?></td>
 				<td><?= $animal['name'] ?></td>
 				<td><?= $animal['description'] ?></td>
 				<td><img src="../img/<?= $animal['avatar'] ?>"width="50" height="50"></td>
 				<td align="center"><?= $animal['category_id'] ?></td>


 				<td align="center"><a href="detail_Product.php?id=<?= $animal['id']?>">Detail</a> |
 				<a href="edit_product.php?id=<?= $animal['id'] ?>">Edit</a> |
 				<a onclick="return confirm('Are you really want to delete it??')" href="demo4.php?id=<?= $animal['id']?>&action=delete">Delete</a>
 				</td>
 			</tr>
 	<?php } ?>
</table>
