<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Modal\Modals;

use App\Http\Livewire\Categories\Categories;
use App\Http\Livewire\Categories\Categoryposts;
use App\Http\Livewire\Posts\Posts;
use App\Http\Livewire\Posts\Post as p;
use App\Http\Livewire\Tags\Tagposts;
use App\Http\Livewire\Tags\Tags;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/fileupload', function () {
        return view('fileupload');
    })->name('fileupload');


    Route::get('/dashboard/blog', function () {
        return view('livewire.posts.posts');
    })->name('posts');

    // Route::get('/dashboard/comissoes', function () {
    //     return view('livewire.homecom');
    // })->name('homecom');

});

Route::get('/dashboard/modals', Modals::class)->middleware('auth');

// Route::get('/dashboard/image-upload', FileUpload::class)->middleware('auth');

Route::get('dashboard/categories', Categories::class)->name('categories');
Route::get('dashboard/categories/{id}/posts', Categoryposts::class);

Route::get('dashboard/posts', Posts::class)->name('posts');
Route::get('dashboard/posts/{id}', p::class);

Route::get('dashboard/tags', Tags::class)->name('tags');
Route::get('dashboard/tags/{id}/posts', Tagposts::class);