<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="./dangky.css">
</head>

<body>
    <form action="ketqua.php" method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="5" cellspacing="0" align="center" bordercolor="brown">
            <tr>
                <td colspan="2" align="center">
                    <b>Đăng Ký</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fullname">Full name</label>
                </td>
                <td>
                    <input type="text" name="fullname" id="fullname" placeholder="Nhập Fullname">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
                <td>
                    <input type="text" name="username" id="username" placeholder="Nhập tên">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td><input type="password" name="password" id="password" placeholder="Nhập mật khẩu"></td>
            </tr>
            <tr>
                <td>
                    <label for="repassword">Nhập lại Password</label>
                </td>
                <td>
                    <input type="password" name="repassword" id="repassword" placeholder="Nhập lại Password">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="sex">Giới tính</label>
                </td>
                <td>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Nam</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Nữ</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="date of birth">Ngày sinh</label>
                </td>
                <td>
                    <input type="date" name="date" id="date">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address">Địa chỉ</label>
                </td>
                <td>
                    <textarea name="address" id="address" cols="25" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="avartar">Avartar</label>
                </td>
                <td>
                    <input type="file" name="file" id="avartar">
                </td>
            </tr>
            <tr>
                <td><label for="hobby">Sở thích</label></td>
                <td>
                    <input type="checkbox" name="hobby" id="movie" value="movie">
                    <label for="movie">Xem Phim</label>
                    <input type="checkbox" name="hobby" id="sport" value="sport">
                    <label for="sport">Thể Thao</label>
                    <input type="checkbox" name="hobby" id="web" value="web">
                    <label for="web">Web</label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="reset" name="reset" value="Reset">
                    <input type="submit" name="OK" value="OK">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>