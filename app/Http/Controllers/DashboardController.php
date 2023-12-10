<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Style;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count = Posts::count();
        $countStyle = Style::count();

        return view('admin.dashboard', compact('count', 'countStyle'));
    }
}
