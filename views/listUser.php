<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách user</h1>
    <a href="./?act=form-add-user"><button>Thêm user</button></a>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Địa chỉ</th>
            <th>Thao tác</th>
        </thead>
        <tbody>
            <?php foreach($listUser as $key=>$user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><img src="<?php echo $user['image']; ?>" style="width: 100px;" alt=""></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['address']; ?></td>
                    <td>
                        <a href="./?act=form-update-user&id=<?php echo $user['id']; ?>">
                            <button>Sửa</button>
                        </a>
                        <a href="./?act=delete-user&id=<?php echo $user['id']; ?>">
                            <button onclick="confirm('Bạn có muốn xóa')">Xóa</button>
                            </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>