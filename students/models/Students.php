<?php

require_once('../../connection.php');
class Students extends Connection
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($name, $lastname, $identification, $email, $subject, $teacher, $average, $registration_date)
    {
        $stmt = $this->db->prepare("INSERT INTO `students` (name, lastname, identification, email, subject, teacher, average, registration_date) VALUES (:name, :lastname, :identification, :email, :subject, :teacher, :average, :registration_date)");

        $stmt->bindParam('name', $name, PDO::PARAM_STR);
        $stmt->bindParam('lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam('email', $email, PDO::PARAM_STR);
        $stmt->bindParam('identification', $identification, PDO::PARAM_STR);
        $stmt->bindParam('subject', $subject, PDO::PARAM_STR);
        $stmt->bindParam('teacher', $teacher, PDO::PARAM_STR);
        $stmt->bindParam('average', $average, PDO::PARAM_STR);
        $stmt->bindParam('registration_date', $registration_date, PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/add.php');
        }
    }

    public function get()
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT * FROM students");
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function getById($id)
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT * FROM students WHERE id_student=:id");
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function update($id, $name, $lastname, $identification, $email, $subject, $teacher, $average, $registration_date)
    {
        $stmt = $this->db->prepare("UPDATE `students` SET name=:name, lastname=:lastname, identification=:identification,email=:email, subject=:subject, teacher=:teacher, average=:average, registration_date=:registration_date WHERE id_student =:id");

        $stmt->bindParam('name', $name, PDO::PARAM_STR);
        $stmt->bindParam('lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam('email', $email, PDO::PARAM_STR);
        $stmt->bindParam('identification', $identification, PDO::PARAM_STR);
        $stmt->bindParam('subject', $subject, PDO::PARAM_STR);
        $stmt->bindParam('teacher', $teacher, PDO::PARAM_STR);
        $stmt->bindParam('average', $average, PDO::PARAM_STR);
        $stmt->bindParam('registration_date', $registration_date, PDO::PARAM_STR);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/edit.php');
        }
    }


    public function delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM students WHERE id_student = :id');
        $stmt->bindParam('id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: ../views/index.php');
        } else {
            header('Location: ../views/delete.php');
        }
    }

    public function Search($search)
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT id_student, name, lastname, identification, email, subject, teacher, average, registration_date FROM students WHERE name LIKE concat('%', :search, '%') OR lastname LIKE concat('%', :search, '%') OR identification LIKE concat('%', :search, '%') OR email LIKE concat('%', :search, '%') OR subject LIKE concat('%', :search, '%') OR teacher LIKE concat('%', :search, '%') OR average LIKE concat('%', :search, '%') OR registration_date LIKE concat('%', :search, '%')");

        $stmt->bindParam('search', $search, PDO::PARAM_STR);
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }
}
