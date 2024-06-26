<?php

namespace App\Livewire\Forms;

use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|string', as: 'name')]
    public $name = '';

    #[Validate('required|email', as: 'email address')]
    public $email = '';

    #[Validate('required|string', as: 'message')]
    public $message = '';

    public function render(): View
    {
        return view('livewire.forms.contact-form');
    }
}
