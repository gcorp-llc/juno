<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\App;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Navbar extends Component
{
    public function locale($locale)
    {
        App::setLocale($locale);
        App::setFallbackLocale($locale);
        Session::put('locale', $locale);
        return $this->redirect(url()->previous(), navigate: false);
    }

    public function logout(): void
    {
      \Auth::logout();
        $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.components.navbar');
    }
}
