<?php
require_once('../../connection.php');
session_start();
class Users extends Connection
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function login($user, $password)
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE user=:user AND password=:password');
        $stmt->bindparam('user', $user, PDO::PARAM_STR);
        $stmt->bindparam('password', $password, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch();
            $_SESSION['id'] = $result['id_user'];
            $_SESSION['name'] = $result['name'] . $result['lastname'];
            $_SESSION['profile'] = $result['profile'];
            return true;
        }

        return false;
    }

    public function getId()
    {
        return $_SESSION['id'];
    }

    public function getName()
    {
        return $_SESSION['name'];
    }

    public function getProfile()
    {
        return $_SESSION['profile'];
    }

    public function validateSession()
    {
        if (!$_SESSION['id']) {
            header('Location: ../../index.php');
        }
    }

    public function validateAdministratorSession()
    {
        if ($_SESSION['id']) {
            if ($_SESSION['profile'] == 'teacher') {
                header('Location: ../../students/views/index.php');
            } 
        }else {
            header('Location: ../../index.php');
        }
    }
    public function logout(){
        $_SESSION['id'] = null;
        $_SESSION['name'] = null;
        $_SESSION['profile'] = null;
        session_destroy();
        header('Location: ../../index.php');
    }
}
