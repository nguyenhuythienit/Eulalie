<!DOCTYPE html>
<html>

<head>
    <title>Sửa thông tin khách hàng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Sửa thông tin khách hàng</h1>
    <a href="khachhang-list.php">Trở về</a> <br /> <br />
    <form method="post" action="admin.php?act=khachhang-edit.php?iduser=<?php echo $data['iduser']; ?>">
        <table width="50%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Họ tên</td>
                <td>
                    <input style="width:100%" type="text" name="hoten" value="<?php echo $data['hoten']; ?>" />
                    <?php if (!empty($errors['hoten'])) echo $errors['hoten']; ?>
                </td>
            </tr>
            <tr>
                <td>SĐT</td>
                <td>
                    <input style="width:100%" type="text" name="sdt" value="<?php echo $data['sdt']; ?>" />
                    <?php if (!empty($errors['sdt'])) echo $errors['sdt']; ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input style="width:100%" type="text" name="email" value="<?php echo $data['email']; ?>" />
                    <?php if (!empty($errors['email'])) echo $errors['email']; ?>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <input style="width:100%" type="text" name="diachi" value="<?php echo $data['diachi']; ?>" />
                    <?php if (!empty($errors['diachi'])) echo $errors['diachi']; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input style="width:100%" type="hidden" name="iduser" value="<?php echo $data['iduser']; ?>" />
                    <input type="submit" name="edit_users" value="Lưu" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>