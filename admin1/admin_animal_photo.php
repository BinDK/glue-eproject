<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_photo_animal');
 ?>

<table>
	<tr>
		<th>ID</th>
		<th>Photo</th>
		<th>Animal_id</th>
	</tr>
<?php while ($animal_id = mysqli_fetch_array($result)) { ?>
 			<tr>
 				<td><?= $animal_id['id'] ?></td>
 				<td><img src="../img/<?= $animal_id['photo'] ?>"width="50" height="50"></td>
 				<td align="center"><?= $animal_id['animal_id'] ?></td>


 				<td align="center"><a href="detail_Product.php?id=<?= $animal_id['id']?>">Detail</a> |
 				<a href="edit_product.php?id=<?= $animal_id['id'] ?>">Edit</a> |
 				<a onclick="return confirm('Are you really want to delete it??')" href="demo4.php?id=<?= $animal_id['id']?>&action=delete">Delete</a>
 				</td>
 			</tr>
 	<?php } ?>
</table>
