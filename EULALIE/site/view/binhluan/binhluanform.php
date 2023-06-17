<?php
    session_start();
    include "../../model/connectdb.php";    
    include "../../model/khachhang.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=getall_bl_sp($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="binhluanform">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="hidden" name="ma_kh" value="<?=$ma_kh?>">
                    <input type="text" name="hoten" id="" class="hoten" placeholder="Họ tên"><br>
                    <input type="text" name="noidungbinhluan" id="" class="noidungbinhluan" placeholder="Gửi bình luận">
                    <input type="submit" class="guibinhluan" name="guibinhluan" id="" value="Gửi">
                </form>
        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung=$_POST['noidungbinhluan'];
                $hoten=$_POST['hoten'];
                $idpro=$_POST['idpro'];
                thembl($noidung,$hoten,$idpro);
                header("location:".$_SERVER['HTTP_REFERER']);
            }
        ?>

</body>
</html>
