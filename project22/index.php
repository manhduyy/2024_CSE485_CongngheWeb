<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/default_avatar.png" // Initial avatar URL
   ];
?>

<form action="update_profile.php" method="post" enctype="multipart/form-data">
    <h2>Thông tin hồ sơ</h2>
    <label for="name">Tên:</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
    <br>
    <label for="avatar">Ảnh đại diện:</label>
    <input type="file" name="avatar" accept="image/*">
    <br>
    <button type="submit">Cập nhật hồ sơ</button>
</form>
