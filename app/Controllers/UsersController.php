<?php

namespace App\Controllers;

class UsersController extends BaseController
{
    public function index()
    {
        return view('users');
    }
}
