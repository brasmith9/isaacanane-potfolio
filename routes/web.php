<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\DeveloperComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProjectComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class)->name('home');
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/projects', ProjectComponent::class)->name('projects');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/developers', DeveloperComponent::class)->name('developers');
