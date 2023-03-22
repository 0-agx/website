<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = 'Dashboard';
        return view('home.dashboard', compact('title'));
    }
}
