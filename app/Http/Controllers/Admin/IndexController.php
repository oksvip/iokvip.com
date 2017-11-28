<?php

namespace App\Http\Controllers\Admin;

class IndexController extends AdminBaseController
{
    public function index()
    {
        return view('admin.index');
    }
}
