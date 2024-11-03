<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/UserController.php';

// Require toàn bộ file Models
require_once './models/User.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'=>(new UserController())->danhSachSinhVien(),

    'form-add-user' =>(new UserController())->formAddUser(),

    'post-add-user' =>(new UserController())->postAddUser(),

    'form-update-user' =>(new UserController())->formUpdateUser(),

    'post-update-user' =>(new UserController())->postUpdateUser(),

    'delete-user' =>(new UserController())->deleteUser(),
    

    
};