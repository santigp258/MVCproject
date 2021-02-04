<?php
require_once('../../connection.php');
class Subjects extends Connection
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
}
