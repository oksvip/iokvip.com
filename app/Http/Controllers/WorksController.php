<?php

namespace App\Http\Controllers;

class WorksController extends Controller
{
    public function index()
    {
        return view('works.index');
    }

    public function show()
    {
        return view('works.show');
    }
}
