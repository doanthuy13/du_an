<?php 

class UserController
{
    public $modelUser;
    public function __construct()
    {
        $this->modelUser = new User();
    }


    public function danhSachSinhVien(){
        // echo "Đây là trang chủ";

        $listUser = $this->modelUser->getAllUser();
        require_once './views/listUser.php';
    }

    public function formAddUser(){
        require_once './views/formAddUser.php';
    }

    public function postAddUser(){
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $image = $_FILES['image'];
            
            if ($this->modelUser->postAddUser($name, $email, $phone, $address, uploadFile($image, './uploads/'))) {
                header("Location: ./");
            }
        }
    }

    public function formUpdateUser(){
        $id = $_GET['id'];
        $user = $this->modelUser->getUserId($id);
        // var_dump($user);die();
        require_once './views/formUpdateUser.php';
    }


    public function postUpdateUser(){
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $old_image = $_POST['old_image'];
            $image = $_FILES['image'];

            // logic sửa ảnh  
            if (isset($image) && $image['error'] == 0) {
                $new_image = uploadFile($image, './uploads/');
                if (isset($old_image)) {
                    deleteFile($old_image);
                }
            }else{
                $new_image = $old_image;
            }
            
            if ($this->modelUser->postUpdateUser($id, $name, $email, $phone, $address, $new_image)) {
                header("Location: ./");
            }
        }
    }

    public function deleteUser(){
        $id = $_GET['id'];
        if ($this->modelUser->deleteUser($id)) {
            header("Location: ./");
        }
    }
}