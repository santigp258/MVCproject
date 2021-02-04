<?php
require_once('../../connection.php');
class Students extends Connection{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
}