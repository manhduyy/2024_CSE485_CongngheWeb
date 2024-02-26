<?php

// Kiểm tra nếu biểu mẫu đã được gửi đi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    // Xử lý tải lên hình đại diện
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; // 1MB
    $targetDir = "uploads/"; // Điều chỉnh đường dẫn thư mục

    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array(strtolower($fileInfo['extension']), $allowedExtensions)) {
            $errors[] = "Chỉ cho phép tệp JPG, JPEG và PNG.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "Kích thước tệp phải nhỏ hơn 1MB.";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile; // Cập nhật URL hình đại diện trong mảng
            } else {
                $errors[] = "Không thể tải lên tệp.";
            }
        }
    }

    // Xử lý lỗi hoặc cập nhật hồ sơ
    if (empty($errors)) {
        // Cập nhật hồ sơ người dùng trong cơ sở dữ liệu hoặc lưu trữ bền vững (thay thế với logic của bạn)
        echo "Cập nhật hồ sơ thành công!";
    } else {
        echo "Có lỗi xảy ra:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
?>
