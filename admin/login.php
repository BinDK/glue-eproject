<?php  
session_start();
if (isset($_POST['btnLogin'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if ($username == 'admin' && $password == '123') {
				$_SESSION['admin'] = $username;
				header('Location:index.php');
			}else {
				$msg = 'Invalid';
			}
}
?>
<?php 
//chổ này là LOG-OUT RA LUÔN, vào lại /admin sẽ băt đặng nhập
// 3 dòng dưới anh thử xóa/comment rồi qua bên kia đăng xuất thử, rồi vào lại /admin thì mình VẪN VÀO LẠI BÌNH THƯỜNG
if (isset($_GET['action'])) {
unset($_SESSION['admin']);
}
?>

<h3>Login Page</h3>
<form method="post">
	Username: <input type="text" name="username">
	<br>
	Password: <input type="password" name="password">
	<br>	<span>em chưa biết cách bỏ notice, nếu mà nhập sai mập khẩu thì nó sẽ báo invalid bình thường à</span>
	<input type="submit" value="Login" name="btnLogin">
	<?=  $msg; ?>
</form>