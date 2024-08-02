<?php

namespace App\Livewire\Components;

use App\Models\Banner;
use Livewire\Component;

class Banners extends Component
{
    public $banners;

    public function mount()
    {
        $this->banners = Banner::latest()->get();
    }
    public function render()
    {
        return view('livewire.components.banners');
    }
}
