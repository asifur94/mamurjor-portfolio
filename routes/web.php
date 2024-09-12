<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\HeroAreaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\Auth\VerifyEmailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [WebsiteController::class, 'FullWebsiteData'])->name('home');


Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware('signed')
    ->name('verification.verify');

// Check for routes with the name 'verification.notice'
Route::get('/email/verify', [VerifyEmailController::class, 'show'])->name('verification.notice');

// Ensure 'verify-email' route is unique and does not conflict
Route::get('/verify-email', [VerifyEmailController::class, 'verifyEmail'])->name('verify-email');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




//hero area
Route::get('/hero', [HeroAreaController::class, 'hero'])->name('hero');
Route::post('/hero', [HeroAreaController::class, 'store'])->name('hero.store');
Route::get('/hero/edit', [HeroAreaController::class, 'edit'])->name('heroEdit');
Route::put('/hero/update', [HeroAreaController::class, 'update'])->name('heroUpdate');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('/about', [AboutController::class, 'store'])->name('about.store');
Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
Route::get('/about/{id}', [AboutController::class, 'show'])->name('about.show');

// Portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Resume
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/resume/create', [ResumeController::class, 'create'])->name('resume.create');
Route::post('/resume', [ResumeController::class, 'store'])->name('resume.store');
Route::get('/resume/{id}/edit', [ResumeController::class, 'edit'])->name('resume.edit');
Route::put('/resume/{id}', [ResumeController::class, 'update'])->name('resume.update');
Route::get('/resume/{id}', [ResumeController::class, 'show'])->name('resume.show');

// Counter
Route::get('/counter', [CounterController::class, 'index'])->name('counter');
Route::get('/counter/create', [CounterController::class, 'create'])->name('counter.create');
Route::post('/counter', [CounterController::class, 'store'])->name('counter.store');
Route::get('/counter/{id}/edit', [CounterController::class, 'edit'])->name('counter.edit');
Route::put('/counter/{id}', [CounterController::class, 'update'])->name('counter.update');
Route::get('/counter/{id}', [CounterController::class, 'show'])->name('counter.show');

// Package
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/package/create', [PackageController::class, 'create'])->name('package.create');
Route::post('/package', [PackageController::class, 'store'])->name('package.store');
Route::get('/package/{id}/edit', [PackageController::class, 'edit'])->name('package.edit');
Route::put('/package/{id}', [PackageController::class, 'update'])->name('package.update');
Route::delete('/package/{id}', [PackageController::class, 'destroy'])->name('package.destroy');
Route::post('/packages/{id}/buy', [PackageController::class, 'buy'])->name('packages.buy');



// Blog Routes

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs'); // View all blogs
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create'); // Show create form
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store'); // Store new blog
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show'); // Show a single blog
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit'); // Show edit form
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update'); // Update a blog
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy'); // Delete a blog


// Blog Category Routes
Route::get('/blog-categories', [BlogCategoryController::class, 'index'])->name('blogCategories'); // View all categories
Route::get('/blog-categories/create', [BlogCategoryController::class, 'create'])->name('blogCategories.create'); // Show create form
Route::post('/blog-categories', [BlogCategoryController::class, 'store'])->name('blogCategories.store'); // Store new category
Route::get('/blog-categories/{id}/edit', [BlogCategoryController::class, 'edit'])->name('blogCategories.edit');
Route::put('/blog-categories/{id}', [BlogCategoryController::class, 'update'])->name('blogCategories.update');
Route::delete('/blog-categories/{id}', [BlogCategoryController::class, 'destroy'])->name('blogCategories.destroy');



// Service
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
Route::get('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

// Setting
Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::get('/setting/create', [SettingController::class, 'create'])->name('setting.create');
Route::post('/setting', [SettingController::class, 'store'])->name('setting.store');
Route::get('/setting/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');
Route::put('/setting/{id}', [SettingController::class, 'update'])->name('setting.update');
Route::get('/setting/{id}', [SettingController::class, 'show'])->name('setting.show');

// Skill
Route::get('/skill', [SkillController::class, 'index'])->name('skill');
Route::get('/skill/create', [SkillController::class, 'create'])->name('skill.create');
Route::post('/skill', [SkillController::class, 'store'])->name('skill.store');
Route::get('/skill/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
Route::put('/skill/{id}', [SkillController::class, 'update'])->name('skill.update');
Route::get('/skill/{id}', [SkillController::class, 'show'])->name('skill.show');


Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');





});

require __DIR__.'/auth.php';


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
