<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<body>
    <form action="xuly_them_tintuc.php" method="post" enctype="multipart/form-data">
    <pre>
        <select name="maloai">
            <?php
            require_once '../admin/database/dbcon.php' ;
            $sql = "select * from loaitin";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)){
            ?>
            <option value ="<?php echo $row['maloai'] ?>">
                <?php echo $row['tenloai']?>
            </option>
            <?php
            }
            ?>
        </select>
        <input type = "text" name = "tentin">
        <textarea name="tomtat"></textarea>
        <textarea name="noidung"></textarea>
        <input type="file" name="hinhanh">
        <input type="text" name="tacgia">
        <input type="submit" value="Thêm"> <input type="reset" value="Hủy">
    </pre>
    </form>
</body>
</html>