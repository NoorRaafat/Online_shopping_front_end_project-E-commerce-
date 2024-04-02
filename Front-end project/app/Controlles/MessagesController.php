<?php


namespace App\Controllers;

use App\Core\App;

class MessagesController
{
    public function store()
    {
        $result = App::get('database')->storeMessage([
            'fname' => $_POST['fname'], 'lname' => $_POST['lname'],
            'subject' => $_POST['subject'], 'body' => $_POST['message']
        ]);

        if ($result) {
            header('location: /contact-us');
        }
    }
}
