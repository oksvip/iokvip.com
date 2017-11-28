<?php

namespace App\Http\Controllers\Index;

class IndexController extends IndexBaseController
{
    public function index()
    {
        return view('index.index');
    }
}
