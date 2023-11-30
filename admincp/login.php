<?php
	session_start();
	include('config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['usernamez'];
		$matkhau = md5($_POST['password']);
        $sql_nguoidung = "SELECT * FROM tbl_dangky ,tbl_admin WHERE (tbl_dangky.taikhoan='".$taikhoan."' AND tbl_dangky.matkhau='".$matkhau."' AND tbl_dangky.chucvu=1) OR (tbl_admin.username='".$taikhoan."' AND tbl_admin.password='".$matkhau."' ) LIMIT 1";
		$row_nguoidung = mysqli_query($connect,$sql_nguoidung); 
        $count = mysqli_num_rows($row_nguoidung);
        
	 
           if($count>0){
                $_SESSION['dangnhap']=$taikhoan;
                header("Location:index.php");
            }else{
                echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
                header("Location:login.php");
            }
       
	}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
</head>
<style>
   
   body{
    background-image: linear-gradient( 45deg, rgb(65, 88, 208) 0%, 
    rgb(200, 80, 192) 50%, rgb(255, 204, 112) 100% );
    height: 100vh;
    overflow: hidden;
}

.warpper {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.taikhoan,
.matkhau {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #3498db;
  border: none;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #258cd1;
}


</style>
<body>
   
    <div class="warpper">
    <form action="" method="POST">
        <h1>LOGIN</h1>
       <div class="taikhoan">
           <label for=""> Tài Khoản</label><br>
           <input type="text" name="usernamez">
       </div>

       <div class="matkhau">
           <label for=""> Mật khẩu</label><br>
           <input type="password" name="password">
       </div>
       <div>
           <input type="submit" name="dangnhap" value="Đăng Nhập">
       </div>
    </form>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>