<?php
require_once('../../connection.php');
class Subjects extends Connection
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($subject)
    {
        $stmt = $this->db->prepare("INSERT INTO `subjects` (subject) VALUES (:subject)");

        $stmt->bindParam('subject', $subject, PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/add.php');
        }
    }

    public function get()
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT * FROM subjects");
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function getById($id)
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT * FROM subjects WHERE id_subject=:id");
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function update($id, $subject)
    {
        $stmt = $this->db->prepare("UPDATE `users` SET subject=:subject id_subject =:id");

        $stmt->bindParam('subject', $subject, PDO::PARAM_STR);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/edit.php');
        }
    }


    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM subjects WHERE id_subject = :id');
        $stmt->bindParam('id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/delete.php');
        }
    }
}
