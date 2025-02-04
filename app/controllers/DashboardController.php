<?php

namespace app\controllers;

use framework\Session;

class DashboardController
{
    public function admin()
    {
        if (!Session::get('user')) {
            redirect('/');
        }
        loadView('admindashboard');
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
}
