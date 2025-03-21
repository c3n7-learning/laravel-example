<?php

namespace Tefabi\Example\Http\Controllers;

use Illuminate\Support\Facades\View;

class MyController
{
    public function index()
    {
        return View::make('example::packageView');
    }
}
