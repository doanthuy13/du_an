<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form update user</h1>
    <form action="./?act=post-update-user" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        <label for="name">Tên</label><br>
        <input type="text" value="<?php echo $user['name'] ?>" name="name"><br>

        <label for="phone">Số điện thoại</label><br>
        <input type="text" value="<?php echo $user['phone'] ?>" name="phone"><br>

        <label for="email">Email</label><br>
        <input type="email" value="<?php echo $user['email'] ?>" name="email"><br>

        <label for="address">Địa chỉ</label><br>
        <input type="text" value="<?php echo $user['address'] ?>" name="address"><br>

        <label for="image">ảnh</label><br>
        <input type="hidden" name="old_image" value="<?php echo $user['image'] ?>">
        <input type="file"  name="image"><br>

        <button>Sửa user</button>
        
    </form>
</body>
</html>