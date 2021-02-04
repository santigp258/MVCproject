<?php

require_once('./connection.php');

class User extends Connection
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($name, $lastname, $user, $password, $profile, $status)
    {
        $stmt = $this->db->prepare("INSERT INTO `users` (name, lastname, user, password, profile, status) VALUES (:name, :lastname, :user, :password, :profile, :status)");

        $stmt->bindparam('name', $name, PDO::PARAM_STR);
        $stmt->bindparam('lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindparam('user', $user, PDO::PARAM_STR);
        $stmt->bindparam('password', $password, PDO::PARAM_STR);
        $stmt->bindparam('profile', $profile, PDO::PARAM_STR);
        $stmt->bindparam('status', $status, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'failed';
        }
    }


    public function update($id, $name, $lastname, $user, $password, $profile, $status)
    {
        $stmt = $this->db->prepare("UPDATE `users` SET name=:name, lastname=:lastname, user=:user, password=:password, profile=:profile, status=:status WHERE id_user =:id");

        $stmt->bindparam('name', $name, PDO::PARAM_STR);
        $stmt->bindparam('lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindparam('user', $user, PDO::PARAM_STR);
        $stmt->bindparam('password', $password, PDO::PARAM_STR);
        $stmt->bindparam('profile', $profile, PDO::PARAM_STR);
        $stmt->bindparam('status', $status, PDO::PARAM_STR);
        $stmt->bindparam('id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function get()
    {
        $rows = null;
        $stmt = $this->db->prepare('SELECT * FROM users');
        $stmt->execute();

        while($result = $stmt->fetch()){
            $rows[] = $result;
        }

        return $rows;
    }

    public function delete($id){
        $stmt = $this->db->prepare('DELETE FROM users WHERE id_user = :id');
        $stmt->bindparam('id', $id, PDO::PARAM_INT);

        if($stmt->execute()){
            echo 'delete success';
        }else{
            echo 'no deleted';
        }
    }
}
