<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.index');
    }

    public function Dashboard(){
        return view('admin.index');
    }
}
