<?php

namespace app\controllers;

use framework\Database;
use framework\Validation;
use framework\Session;

class UserController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function login()

    {

        loadView('login');
    }
    public function register()
    {
        loadView('register');
    }

    public function store()
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];


        $errors = [];
        $message = [];

        if (!Validation::string($firstname, 2, 50)) {
            $errors['firstname'] = 'First name must be at least 2 and 50 characters';
        }

        if (!Validation::string($lastname, 2, 50)) {
            $errors['lastname'] = 'Last name must be at least 2 and 50 characters';
        }
        if (!Validation::email($email)) {
            $errors['email'] = 'Please enter valid email address';
        }

        if (!Validation::string($password, 6, 50)) {
            $errors['password'] = 'Password must be at least 6 characters';
        }

        if (!Validation::match($password, $cpassword)) {
            $errors['password_confirmation'] = 'Password do not match';
        }



        if (!empty($errors)) {
            loadView('register', [
                'errors' => $errors,
                'user' => [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                ]
            ]);
            exit;
        }

        //check if email exist
        $params = [
            'email' => $email,
        ];

        $user = $this->db->query('SELECT * from users WHERE email = :email', $params)->fetch();
        if ($user) {
            $errors['email'] = 'Email is already exist';
            loadView('register', [
                'errors' => $errors,
            ]);
            exit;
        }

        //creating a use account

        $params = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $this->db->query('INSERT INTO users (first_name,last_name,email,password) VALUES (:firstname,:lastname,:email,:password)', $params);

        //Get the new user ID
        $userID = $this->db->conn->lastInsertId();

        Session::set('user', [
            'id' => $userID,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
        ]);
        redirect('/');
    }


    public function authenticate()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];

        if (!Validation::email($email)) {
            $errors['email'] = 'Please enter a valid email';
        }

        if (!Validation::string($password, 6, 50)) {
            $errors['password'] = 'Password must be at least 6 characters';
        }
        // Check for errors
        if (!empty($errors)) {
            loadView('login', [
                'errors' => $errors
            ]);
            exit;
        }

        $params = [
            'email' => $email,
        ];

        $user = $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();

        if (!$user) {
            $errors['email'] = 'Incorrect credentials';
            loadView('login', [
                'errors' => $errors,
            ]);
            exit;
        }
        if (!password_verify($password, $user['password'])) {
            $errors['email'] = 'Incorrect credentials';
            loadView('login', [
                'errors' => $errors,
            ]);
            exit;
        }

        //check user role
        if ($user['role'] === 'admin') {
            //set user session

            Session::set('user', [
                'id' => $user['id'],
                'firstname' => $user['first_name'],
                'lastname' => $user['last_name'],
                'email' => $user['email'],
            ]);
            redirect('/admindashboard');
        } else {
            Session::set('user', [
                'id' => $user['id'],
                'firstname' => $user['first_name'],
                'lastname' => $user['last_name'],
                'email' => $user['email'],
            ]);
            redirect('/memberdashboard');
        }
    }


    /**
     * Logout a user and kill session
     *
     * @return void
     */
    public function logout()
    {
        Session::clearAll();
        session_destroy();
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain']);

        redirect('/');
    }
}
