<?php

namespace app\controllers;

use framework\Database;

class HomeControllers
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index()
    {
        $savings =  $this->db->query('SELECT * FROM savings ORDER BY date_added DESC LIMIT 4')->fetchAll();
        inspectAndDie($savings);
        loadView('admindashboard', [
            'savings' => $savings,
        ]);
    }
}
