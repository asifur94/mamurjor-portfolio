<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Breadcrumbs extends Component
{
    public $breadcrumbs;

    public function __construct()
    {
        $this->breadcrumbs = $this->generateBreadcrumbs();
    }

    private function generateBreadcrumbs()
{
    $routeName = Route::currentRouteName();
    $breadcrumbs = [
        ['name' => 'Dashboard', 'url' => route('dashboard')],
    ];

    switch ($routeName) {
        case 'portfolio':
            $breadcrumbs[] = ['name' => 'Portfolio', 'url' => route('portfolio')];
            break;
        case 'hero':
        case 'hero.store':
        case 'heroEdit':
            $breadcrumbs[] = ['name' => 'Hero Area', 'url' => route('hero')];
            break;
        case 'about':
            $breadcrumbs[] = ['name' => 'About', 'url' => route('about')];
            break;
        case 'resume':
            $breadcrumbs[] = ['name' => 'Resume', 'url' => route('resume')];
            break;
        case 'counter':
            $breadcrumbs[] = ['name' => 'Counter', 'url' => route('counter')];
            break;
        case 'package':
            $breadcrumbs[] = ['name' => 'Package', 'url' => route('package')];
            break;
        case 'blog':
            $breadcrumbs[] = ['name' => 'Blog', 'url' => route('blogs')];
            break;
        case 'service':
            $breadcrumbs[] = ['name' => 'Service', 'url' => route('service')];
            break;
        case 'setting':
            $breadcrumbs[] = ['name' => 'Settings', 'url' => route('setting')];
            break;
        case 'skill':
            $breadcrumbs[] = ['name' => 'Skills', 'url' => route('skill')];
            break;
        default:
            $breadcrumbs[] = ['name' => 'Page Not Found', 'url' => route('hero')];
            break;
    }

    return $breadcrumbs;
}


    public function render()
    {
        return view('components.breadcrumbs');
    }
}


