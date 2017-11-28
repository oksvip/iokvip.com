<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class MenuComposer
{
    protected $indexMenus;

    public function __construct()
    {
        $this->indexMenus = [
            route('home') => 'Home',
            route('works.index') => 'Works',
            route('about') => 'About',
            route('contact') => 'Contact',
        ];
    }

    // 将数据渲染到视图中
    public function compose(View $view)
    {
        // 渲染数据
        $view->with('indexMenus', $this->indexMenus);
    }
}