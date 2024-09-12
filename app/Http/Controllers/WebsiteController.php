<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\heroArea;
use App\Models\Package;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function FullWebsiteData()
    {
        $blogs = Blog::latest()->take(3)->get();
        $packages = Package::latest()->take(3)->get();
        $heroArea = HeroArea::first();
        $services = Service::all();
        return view('welcome', compact('blogs', 'heroArea','packages','services'));
    }



}
