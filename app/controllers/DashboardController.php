<?php

namespace app\controllers;

class DashboardController
{
    public function admin()
    {
        loadView('admindashboard');
    }

    public function member()
    {
        loadView('memberdashboard');
    }
}
