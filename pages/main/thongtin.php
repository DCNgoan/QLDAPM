<style>
    .thongtin{
         width: 50%;
         height: 100%;
         border: 3px solid black;
         border-radius: 15px;
         margin-top:10px;
         background-color: bisque;
         background-image: linear-gradient(to right,#8E44AD,#F5B041);
         font-size: large;
        
        
     }
</style>
 
 <p>Thông tin cá nhân </p>
<div class="thongtin">
 <p><?php
        if(isset($_SESSION['dangky'])){
            echo 'Xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
            $id =$_SESSION['dangky'];
            $sql_thongtin ="SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
            $query_thongtin=mysqli_query($connect,$sql_thongtin);
            
            while($row=mysqli_fetch_array($query_thongtin)){
            
        
  ?></p>
    

    <p>Họ và tên : <?php echo $row['hovaten']  ?></p>
    <p>Email : <?php echo $row['email']  ?></p>
    <p>Địa chỉ : <?php echo $row['diachi']  ?></p>
    <p>Số điện thoại : <?php echo $row['sodienthoai']  ?></p>
    


<?php
            }
    }

    ?>
</div>