<?php
namespace c;
use m;
// app/controllers/UserController.php
class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $users = $this->model->getUsers();
        
        include 'app/views/user_list.php';
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $data = [
                'username' =>$username ,
                'password' =>$password 
            ];

            if ($this->model->addUser($data)) {
                echo "User added successfully!";
            } else {var_dump($data);
                echo "Failed to add user.";
            }
        }
    }


    public function updateUser($id){
        
        // $users = $this->model->getUsers();
        // if(include "app/views/update.php"){}
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id=$_GET['id'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $data = [
                'username' =>$username ,
                'password' =>$password 
            ];
            if ($this->model->updateUser($data,$id)) {
                echo "User update successfully!";
            }
            else
               { echo "Failed to update user.";}
            }

    
}


   public function DeleteUser($id){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id=$_GET['id'];
        if ($this->model->DeleteUser($id)) {
            echo "User Delete successfully!";
        } else {
            echo "Failed to Delete user.";
        }
    }
 }

 
}


?>
