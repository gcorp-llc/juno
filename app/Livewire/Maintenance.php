<?php

namespace App\Livewire;

use App\Settings\GeneralSettings;
use Livewire\Component;

class Maintenance extends Component
{
    public function mount(GeneralSettings $settings)
    {
        if (!$settings->maintenance ) return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.maintenance')->layout('layouts.guest');
    }
}
