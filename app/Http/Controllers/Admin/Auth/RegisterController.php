<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\AdminBaseController;
use Illuminate\Http\Request;

class RegisterController extends AdminBaseController
{
    public function index()
    {
        return view('admin.auth.register');
    }

    public function register()
    {

    }
}
