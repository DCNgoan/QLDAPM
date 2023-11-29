<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_bill.css">
    <link rel="stylesheet" href="css/style_ads.css">
    <link rel="stylesheet" href="css/style_ac.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Shop</title>
</head>
<body>
    <div class="wrapper">
        <?php
        session_start();
        
        include("admincp/config/connect.php");
        include("pages/header.php");
       
        include("pages/main.php");
        
        include("pages/show_product.php");
        include("pages/footer.php");

        ?>
    </div>
       
   

</body>
<script type="text/javascript" src="js/modal.js"></script>
</html>