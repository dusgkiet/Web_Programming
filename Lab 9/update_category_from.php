<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật</title>
</head>
<body>
    <h1>Sửa danh mục</h1>
    <from method="post" action="update_category.php">
        <table>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
            </tr>
            <tr>
                <td><input type="text" name="txtma" value="<?php echo $_POST["txtma"];?>" readonly="true"></td>
                <td><input type="text" name="txttendm" value="<?php echo $_POST["txttendm"];?>" readonly="true"></td>
            </tr>
        </table><br>
        <input type="submit" value="Cập nhật">
        <a href="category_list.php"><input type="button" value="Quay về"></a>
    </from>
</body>
</html>