<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.common.index');
    }
    public function addblog()
    {
        return view('admin.common.addblog');
    }
}
