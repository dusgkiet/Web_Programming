<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang danh mục</title>
</head>
<?php
    require_once("database.php");
    $sql = "SELECT * from danhmuc order by madm";
    $bangdm = $db->query($sql);
?>
<body>
    <h1 class="text-primary">Quản lý danh mục</h1>
    <table border=1>
        <tr>
            <th>Tên</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
        <?php foreach ($bangdm as $d) { ?>
            <tr>
                <td><?php echo $d['tendm'];?></td>
                <td>
                    <from action="delete_category.php" method="post">
                        <input type="hidden" name="txtmadm" value="<?php echo $d['madm'];?>">
                        <input type="submit" value="Xóa">
                    </from>
                </td>
                <td>
                    <from action="update_category_from.php" method="post">
                        <input type="hidden" name="txtma" value="<?php echo $d['madm'];?>">
                        <input type="hidden" name="txttendm" value="<?php echo $d['tendm'];?>">
                        <input type="submit" value="Sửa">
                    </from>
                </td>
            </tr>
            <?php } ?>
    </table>
    <br/>
    <a href="add_category_from.php"><input type="button" value="Thêm danh mục"></a>
</body>
</html>