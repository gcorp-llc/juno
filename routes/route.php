<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', \App\Livewire\Pages\Home::class)->name('home');
Route::get('/posts', \App\Livewire\Pages\Posts::class)->name('posts');
Route::get('/gallery', \App\Livewire\Pages\Gallery::class)->name('gallery');
Route::get('/faq', \App\Livewire\Pages\Faq::class)->name('faq');
Route::get('/contact_us', \App\Livewire\Pages\Contact::class)->name('contact_us');
Route::get('/about_us', \App\Livewire\Pages\About::class)->name('about_us');
Route::get('/tune', \App\Livewire\Pages\Tune::class)->name('tune');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


