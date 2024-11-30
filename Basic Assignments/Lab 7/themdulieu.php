<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dữ liệu</title>
</head>
<body>
    <form action="xulydulieu.php" method="post">
        <table>
        <tr>
            <td colspan="2"><h3>Thêm sinh viên</h3></td>
        </tr>
        <tr>
            <td>Mã sinh viên</td>
            <td><input type="text" name="txt_maSV" id="txt_maSV" size="30" value=""></td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="txt_tenSV" id="txt_tenSV" size="30" value=""></td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td>
                <input type="radio" name="rd_gt" value="0">Nam
                <input type="radio" name="rd_gt" value="1">Nữ
            </td>
        </tr>
        <tr>
            <td>Quê quán</td>
            <td><input type="text" name="txt_diachi" id="txt_diachi" size="30" value=""></td>
        </tr>
        <tr>
            <td>Năm sinh</td>
            <td><input type="year" name="txt_date" value=""></td>
        </tr>
        <tr>
            <td>Ngành học</td>
            <td><input type="text" name="txt_nganhhoc" id="txt_nganhhoc" size="30" value=""></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btnSave" id="btn" value="Lưu">
            </td>
        </tr>
        </table>
    </form>
</body>
</html>