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
    <form action="index.php" method="POST">
        <div style="align-content: center;">
            <button type="submit" olspan="2" align="center"> Trở Về</button>
        </div> <?php
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$sex = $_POST['gender'];
$date = $_POST['date'];
$address = $_POST['address'];
$hobby = implode(', ', $_POST['hobby']);

require 'data/data.php';
if (isset($_FILES['file'])) {
    //show_array($_FILES);
    $error = array();
    $upload_dir = 'uploads/';
    //Đường dẫn của file sau khi uploads
    $upload_file = $upload_dir . $_FILES['file']['name'];

    #xử lý uploads đúng file ảnh
    $type_allow = array('png', 'jpg', 'jpeg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); //lấy đuôi của file
    if (!in_array(strtolower($type), $type_allow)) {
        $error['file_type'] = 'Chỉ được up load  file ảnh có file ipg, png, gif, jpeg ';
    }
    // echo $type;

    #Xử lý uploads file có kích thước cho phép(<20mb ~~ 29.000.000 byte)
    $file_size = $_FILES['file']['size'];

    if ($file_size > 29000000) {
        $error['file_size'] = 'Chỉ được uploads file bé hơn 20 MB';
    }

    #Kiểm tra  trùng tên file trên hệ thống
    if (file_exists($upload_file)) {
        //-Xử lý đổi tên file tự động
        #1.Tạo File mới
        //tên file.Đuôi file
        $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
        $new_file_name = $file_name . ' -copy.';
        $new_upload_file = $upload_dir . $new_file_name . $type;
        $k = 1;
        while (file_exists($new_upload_file)) {
            $new_file_name = $file_name . " -copy({$k}).";
            $k++;
            $new_upload_file = $upload_dir . $new_file_name . $type;
        }

        $upload_file = $new_upload_file;
        //$error['file_exists']='File đã tồn tại trên hệ thống';
    }

    if (empty($error)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        } else {
            echo "Upload file không thành công";
        }
    } else {
        show_array($error);
    }
}

?> <table border=" 1" cellpadding="5" cellspacing="0" align="center">
            <tr>
                <td>Full Name: </td>
                <td colspan="2" align="center"><?php echo '' . $fullname; ?></td>
            </tr>
            <tr>
                <td>User Name: </td>
                <td colspan="2" align="center"><?php echo '' . $username; ?></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td colspan="2" align="center"><?php echo '' . $password; ?></td>
            </tr>
            <tr>
                <td>Repassword: </td>
                <td colspan="2" align="center"><?php echo '' . $repassword; ?></td>
            </tr>
            <tr>
                <td>Giới tính: </td>
                <td colspan="2" align="center"><?php echo '' . $sex; ?></td>
            </tr>
            <tr>
                <td>Ngày sinh: </td>
                <td colspan="2" align="center"><?php echo '' . $date; ?></td>
            </tr>
            <tr>
                <td>Địa chỉ: </td>
                <td colspan="2" align="center"><?php echo '' . $address; ?></td>
            </tr>
            <tr>
                <td>Avatar: </td>
                <td colspan="2" align="center"><?php echo "<img src='{$upload_file}' />"; ?></td>
            </tr>
            <tr>
                <td>Sở thích: </td>
                <td colspan="2" align="center"><?php echo '' . $hobby; ?></td>
            </tr>
        </table>
    </form>
</body>

</html>