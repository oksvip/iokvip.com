<?php

namespace App\Http\Controllers\Index;

class PagesController extends IndexBaseController
{
    public function about()
    {
        return view('index.pages.about');
    }

    public function contact()
    {
        return view('index.pages.contact');
    }
}
