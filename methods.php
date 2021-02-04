<?php
require_once('connection.php');
class Methods extends Connection
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function getSubjects()
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT * FROM subjects");
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function getTeachers()
    {
        $rows = null;
        $stmt = $this->db->prepare("SELECT * FROM users WHERE profile = 'teacher'");
        $stmt->execute();

        while ($result = $stmt->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }
}
