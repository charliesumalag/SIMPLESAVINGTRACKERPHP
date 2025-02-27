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

    public function adminsavings()
    {
        $savings = $this->db->query("SELECT savings.*, users.first_name FROM savings INNER JOIN users ON savings.user_id = users.id ORDER BY savings.date_added DESC")->fetchAll();

        $members = $this->db->query("SELECT first_name from users WHERE role != 'admin'");


        loadView('savings', [
            'savings' => $savings,
            'members'  => $members,
        ]);
    }
    public function adminloans()
    {
        loadView('loan');
    }


    public function member()
    {
        if (!Session::get('user')) {
            redirect('/');
        }
        $user = Session::get('user');
        $savingsAll = $this->db->query('SELECT * FROM savings WHERE user_id = ' . $user['id'] . ' ORDER BY date_added DESC LIMIT 4')->fetchAll();

        $saving = $this->db->query("SELECT SUM(amount) as total_savings FROM savings WHERE user_id = " . $user['id'])->fetch();

        loadView('memberdashboard', [
            'savingsAll' => $savingsAll,
            'savings' => $saving['total_savings'] ?? 0,
        ]);
    }


    public function membersaving()
    {
        $user = Session::get('user');
        $savingsAll = $this->db->query('SELECT * from savings where user_id =' . $user['id'])->fetchAll();
        $saving = $this->db->query("SELECT SUM(amount) as total_savings FROM savings WHERE user_id = " . $user['id'])->fetch();

        loadView('membersavings', [
            'savings' => $savingsAll,
        ]);
    }
}
