<?php

namespace App\Http\Controllers\Dashboard;

class HomeController extends BaseController
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function me()
    {
        return request()->user();
    }
}
