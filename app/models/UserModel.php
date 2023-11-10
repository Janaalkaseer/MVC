<?php
namespace m;
use c;
// app/models/UserModel.php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUsers() {
        return $this->db->get('users');
    }

    public function addUser($data) {
        return $this->db->insert('users', $data);
    }

    public function updateUser($data,$id)
    {     
        $username=$_POST['username'];
        $password=$_POST['password'];
        $data = [
            'username' =>$username ,
            'password' =>$password 
        ];
        $condition = $this->db->where('id' ,$id);
        return $this->db->update('users', $data, $condition);
    }

    public function DeleteUser($id) {
        $condition = $this->db->where('id' ,$id);
        return $this->db->delete('users', $condition);
    }


}
?>
