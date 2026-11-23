<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]

class FormPage extends Component
{
    public function render()
    {
        return view('livewire.pages.form-page');
    }
}
