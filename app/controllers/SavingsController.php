<?php

namespace app\controllers;

use framework\Database;

use framework\Session;
use framework\Validation;

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

    public function add()
    {

        $name = $_POST['member'];
        $amount = $_POST['amount'];


        $errors = [];

        if (!Validation::string($name, 2, 50)) {
            $errors['name'] = 'Name must be at least 2 and 50 characters';
        }

        if (!Validation::number($amount)) {
            $errors['amount'] = 'Amount must be a number';
        }

        if (!empty($errors)) {
            loadView('savings', [
                'errors' => $errors,
                'inputs' => [
                    'name' => $name,
                    'amount' => $amount,
                ],
            ]);
            exit;
        }

        $params = [
            'name' => $name,
        ];

        $user = $this->db->query('SELECT id FROM users WHERE first_name = :name', $params)->fetch();

        if (!$user) {
            $errors['name'] = 'User not found';
            loadView('savings/addsavings', [
                'errors' => $errors,
                'inputs' => [
                    'name' => $name,
                    'amount' => $amount,

                ],
            ]);
            exit;
        }

        $user_id = $user['id'];

        $params = [
            'user_id' => $user_id,
            'amount' => $amount,

        ];

        $this->db->query('INSERT INTO savings (user_id, amount) VALUES(:user_id, :amount)', $params);

        $savings = $this->db->query("SELECT savings.*, users.first_name FROM savings INNER JOIN users ON savings.user_id = users.id ORDER BY savings.date_added DESC")->fetchAll();


        Session::set('success', 'Savings added successfully!');
        redirect('/adminsavings');
    }

    public function delete($id)
    {
        $params = [
            'id' => $id,
        ];

        $saving = $this->db->query('SELECT * FROM savings WHERE id = :id', $params)->fetch();

        if (!$saving) {
            echo 'saving not found';
            return;
        }

        $this->db->query('DELETE FROM savings WHERE id = :id', $params);
        Session::set('success', 'Saving deleted successfully!');
        redirect('/adminsavings');
    }

    public function edit()
    {
        $id = $_POST['id'] ?? null;
        $amount = $_POST['amount'] ?? null;

        $params = [
            'id' => $id,
            'amount' => $amount,
        ];


        $updated = $this->db->query('UPDATE savings SET amount = :amount WHERE id = :id', $params);

        if ($updated) {
            Session::set('success', 'Saving updated successfully!');
            redirect('/adminsavings');
        }
    }
}
