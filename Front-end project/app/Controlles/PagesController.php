<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function services()
    {
        return view('services');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function menClothing()
    {
        return view('men-clothing');
    }

    public function womenClothing()
    {
        return view('women-clothing');
    }

    public function childrenClothing()
    {
        return view('children-clothing');
    }

    public function accessories()
    {
        return view('accessories');
    }

    public function makeup()
    {
        return view('makeup');
    }

    public function glasses()
    {
        return view('glasses');
    }

    public function buttons()
    {
        return view('/admin/buttons');
    }

    public function forms()
    {
        return view('/admin/forms');
    }

    public function charts()
    {
        return view('/admin/charts');
    }
}
