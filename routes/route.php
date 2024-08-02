<?php
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
Route::get('/', \App\Livewire\Pages\Home::class)->name('home');
Route::get('/articles', \App\Livewire\Pages\Posts::class)->name('posts');
Route::get('/faq', \App\Livewire\Pages\Faq::class)->name('faq');
Route::get('/contact_us', \App\Livewire\Pages\Contact::class)->name('contact_us');
Route::get('/about_us', \App\Livewire\Pages\About::class)->name('about_us');

Route::get('dr/{slug}',\App\Livewire\Show\Doctor::class)->name('dr.show');
Route::get('article/{slug}',\App\Livewire\Show\Post::class)->name('article.show');


