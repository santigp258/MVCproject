<?php

require_once('../../connection.php');
class Teachers extends Connection
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($name, $lastname, $user, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO `users` (name, lastname, user, password, profile, status) VALUES (:name, :lastname, :user, :password, 'teacher', 'active')");

        $stmt->bindParam('name', $name, PDO::PARAM_STR);
        $stmt->bindParam('lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam('user', $user, PDO::PARAM_STR);
        $stmt->bindParam('password', $password, PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/add.php');
        }
    }

    public function get()
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT * FROM users WHERE profile= 'teacher'");
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function getById($id)
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT * FROM users WHERE profile= 'teacher' AND id_user=:id");
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function update($id, $name, $lastname, $user, $password, $status)
    {
        $stmt = $this->db->prepare("UPDATE `users` SET name=:name, lastname=:lastname, user=:user, password=:password, status=:status WHERE id_user =:id");

        $stmt->bindParam('name', $name, PDO::PARAM_STR);
        $stmt->bindParam('lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam('user', $user, PDO::PARAM_STR);
        $stmt->bindParam('password', $password, PDO::PARAM_STR);
        $stmt->bindParam('status', $status, PDO::PARAM_STR);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/edit.php');
        }
    }


    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM users WHERE id_user = :id');
        $stmt->bindParam('id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/delete.php');
        }
    }
}
