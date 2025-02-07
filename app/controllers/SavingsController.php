<?php

namespace app\controllers;

use framework\Database;

use framework\Session;

class SavingsController

{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }
    public function addSaving()
    {
        loadView('savings/addsavings');
    }
}
