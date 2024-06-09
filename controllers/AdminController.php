<?php

include_once 'models/users.php';
include_once 'function/main.php';
include_once 'app/config/static.php';

class AdminController{
    static function index(){
        $user = $_SESSION['user'];
        $user_role = $user['role_id'];
        if ($user_role == '1'){
            view('admin/dashboard', ['url' => 'dashboard-admin']);
        }
        else{
            header('location: restricted');
        }
    }
}