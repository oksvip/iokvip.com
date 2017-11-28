<?php

namespace App\Http\Controllers\Index;

class WorksController extends IndexBaseController
{
    public function index()
    {
        return view('index.works.index');
    }

    public function show()
    {
        return view('index.works.show');
    }
}
