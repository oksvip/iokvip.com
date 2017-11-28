<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\AdminBaseController;
use Illuminate\Http\Request;

class ResetController extends AdminBaseController
{
    public function index()
    {
        return view('admin.auth.password.reset');
    }

    public function reset()
    {

    }
}
