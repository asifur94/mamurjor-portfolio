<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userName = Auth::user()->name;

        $blogCount = Blog::count();
        $userCount = User::count();
        $packageCount = Package::count();

        return view('admin.dashboard', compact('userName', 'blogCount', 'userCount', 'packageCount'));
    }

    // public function dashboardAllData()
    // {
    //     $userName = Auth::user()->name;

    //     $blogCount = Blog::count();
    //     $userCount = User::count();
    //     $packageCount = Package::count();

    //     return view('admin.dashboard', compact('userName', 'blogCount', 'userCount', 'packageCount'));
    // }
}
