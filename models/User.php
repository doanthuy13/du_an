<?php 

class User 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllUser(){
        try {
            $sql = 'SELECT * FROM users';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: ". $e->getMessage();
        }
    }

    public function postAddUser($name, $email, $phone, $address, $image){
        try {
            $sql = 'INSERT INTO users (name, email, phone, address, image)
            VALUES(:name, :email, :phone, :address, :image)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':name'=>$name, ':email'=>$email, ':phone'=>$phone, ':address'=>$address, ':image'=>$image]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: ". $e->getMessage();
        }
    }

    public function getUserId($id){
        try {
            $sql = 'SELECT * FROM users WHERE id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id'=>$id]);
            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Lỗi: ". $e->getMessage();
        }
    }


    public function postUpdateUser($id, $name, $email, $phone, $address, $image){
        try {
            $sql = 'UPDATE users SET  name=:name, email=:email, phone=:phone, address=:address, image=:image
            WHERE id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id'=>$id ,':name'=>$name, ':email'=>$email, ':phone'=>$phone, ':address'=>$address, ':image'=>$image]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: ". $e->getMessage();
        }
    }


    public function deleteUser($id){
        try {
            $sql = 'DELETE FROM users WHERE id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id'=>$id]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: ". $e->getMessage();
        }
    }
    
}