<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function find()
    {
        if ($_POST['username'] == 'admin' and $_POST['password'] == 123) {
            return view('/admin/charts');
        }
        if (App::get('database')->findUser($_POST['username'], $_POST['password'])) {
            header('location: /');
        } else {
            header('location: /login');
        }
    }

    public function store()
    {
        $result = App::get('database')->storeUser($_POST['username'], $_POST['password']);
        if ($result) {
            header('location: /');
        }
    }

    public function index()
    {
        $users = App::get('database')->allUsers();
        foreach ($users as $user) {
            echo "user id: " . $user['id'] . " username: " . $user['username'] . "<br>";
        }
    }
}
