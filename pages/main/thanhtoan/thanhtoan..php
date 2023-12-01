
 <?php
	
	session_start();
	include('../../../admincp/config/connect.php');
	if(isset($_POST['redirect'])){
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = rand(0,9999);// random tuwf 0 den 4 so
	$cart_pay=$_POST['payment'];
	$insert_cart = "INSERT INTO tbl_giohang(id_khachhang,code_cart,cart_status,cart_payment) VALUE('".$id_khachhang."','".$code_order."',1,'".$cart_pay."')";
	$cart_query = mysqli_query($connect,$insert_cart);
	}
?>