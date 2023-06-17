<?php
require 'khachhang.php';
$users = get_all_users();
disconnect_db();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Danh sách khách hàng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Danh sách khách hàng</h1>
    <!-- <a href="khachhang-add.php">Thêm user</a> <br /> <br /> -->
    <table width="100%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>Họ tên</td>
            <td>Số điện thoại</td>
            <td>Email</td>
            <td>Địa chỉ</td>
            <td>Chức năng</td>
        </tr>
        <?php foreach ($users as $item) { ?>
        <tr>
            <td><?php echo $item['iduser']; ?></td>
            <td><?php echo $item['hoten']; ?></td>
            <td><?php echo $item['sdt']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td><?php echo $item['diachi']; ?></td>
            <td>
                <form method="post" action="khachhang-delete.php">
                    <input onclick="window.location = 'admin.php?act=updateuser&iduser=<?php echo $item['iduser']; ?>'"
                        type="button" value="Sửa" />
                    <input type="hidden" name="iduser" value="<?php echo $item['iduser']; ?>" />
                    <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete"
                        value="Xóa" />
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>