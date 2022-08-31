<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả</title>
    <link rel="stylesheet" href="ketqua.css">
</head>

<body>
    <a class="under" href="dangky.php"> Trở lại</a> <?php
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$sex = $_POST['gender'];
$date = $_POST['date'];
$address = $_POST['address'];
$avartar = $_POST['avartar'];
$hobby = $_POST['hobby'];

echo 'Full name: ' . $fullname . '<br>';
echo 'Username: ' . $username . '<br>';
echo 'Password: ' . $password . '<br>';
echo 'Repassword: ' . $repassword . '<br>';
echo 'Giới tính: ' . $sex . '<br>';
echo 'Ngày sinh: ' . $date . '<br>';
echo 'Địa chỉ: ' . $address . '<br>';
echo 'Avatar: ' . $avartar . '<br>';
echo 'Sở thích: ' . '<br>';
var_dump($hobby)
?>
</body>

</html>