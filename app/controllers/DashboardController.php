<?php

namespace app\controllers;

use framework\Database;

use framework\Session;

class DashboardController

{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function admin()
    {
        if (!Session::get('user')) {
            redirect('/');
        }

        $savings = $this->db->query("SELECT savings.*, users.first_name FROM savings INNER JOIN users ON savings.user_id = users.id ORDER BY savings.date_added DESC LIMIT 4")->fetchAll();

        $savingsTotal = $this->db->query("SELECT SUM(amount) AS total_savings FROM savings")->fetch();


        loadView('admindashboard', [
            'savings' => $savings,
            'savingsTotal' => $savingsTotal['total_savings'] ?? 0,
        ]);
    }
    public function adminaccount()
    {
        loadView('account');
    }

    public function member()
    {
        if (!Session::get('user')) {
            redirect('/');
        }
        loadView('memberdashboard');
    }

    public function adminsavings()
    {
        $savings = $this->db->query("SELECT savings.*, users.first_name FROM savings INNER JOIN users ON savings.user_id = users.id ORDER BY savings.date_added DESC")->fetchAll();
        loadView('savings', [
            'savings' => $savings,
        ]);
    }
    public function adminloans()
    {
        loadView('loan');
    }
}
