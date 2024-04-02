<?php


namespace App\Controllers;

use App\Core\App;

class SubscriptionController
{
    public function store()
    {
        $result = App::get('database')->storeEmail($_POST['email']);
        if ($result) {
            header('location: /');
        }
    }
}
