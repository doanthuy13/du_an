<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form add user</h1>
    <form action="./?act=post-add-user" method="post" enctype="multipart/form-data">
        <label for="name">Tên</label><br>
        <input type="text" name="name"><br>

        <label for="phone">Số điện thoại</label><br>
        <input type="text" name="phone"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email"><br>

        <label for="address">Địa chỉ</label><br>
        <input type="text" name="address"><br>

        <label for="image">ảnh</label><br>
        <input type="file" name="image"><br>

        <button>Thêm user</button>
        
    </form>
</body>
</html>