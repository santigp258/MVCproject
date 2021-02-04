<?php

require_once('../../connection.php');
class Teachers extends Connection{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
}