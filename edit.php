 <?php 
include "koneksi.php";
if ($_POST['id']) {
$id = $_GET['id'];
$sqli = mysqli_query($koneksi,"SELECT * FROM user_detail WHERE id='$id'");
foreach ($sqli as $row):
 ?>
 	<form method="POST">
 		<p><input type="hidden" name="txt_id" value="<?php echo $id; ?>"></p>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="txt_email" value="<?=$row['user_email']?>" readonly>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="txt_pass" value="<?=$row['user_password']?>">
    </div>
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="txt_nama" value="<?=$row['user_fullname']?>">
    </div>
 		<button class="btn btn-primary" type="submit" name="update">Update</button>	
 	</form>
 	<?php 
    endforeach;
}
?>
 <?php 
if(isset($_POST["update"])){

		$userId = $_POST['txt_id'];
	$userMail = $_POST['txt_email'];
		$userPass = $_POST['txt_pass'];
		$userName = $_POST['txt_nama'];

		$query = mysqli_query($koneksi, "UPDATE user_detail SET user_password='$userPass', user_fullname='$userName' WHERE id='$userId'");
}
  ?>
  <meta http-equiv="refresh" content="0;URL=listberita.php" />