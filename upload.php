<?php
require 'data/data.php';
show_array($_FILES);

// thư mục giữa file uploads
$upload_dir = '/uploads';
//Đường dẫn của file sau khi uploads
$upload_file = $upload_dir . $_FILES['file']['name'];
if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
    echo "<a href='$upload_file'>Download: {$_FILES['file']['name']}</a>";

} else {
    echo "Upload file không thành công";
}