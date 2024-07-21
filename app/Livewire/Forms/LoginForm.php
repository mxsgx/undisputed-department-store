<?php

namespace App\Livewire\Forms;

use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginForm extends Component
{
    #[Validate('required|email', as: 'email address')]
    public $email = '';

    #[Validate('required', as: 'password')]
    public $password = '';

    public function render(): View
    {
        return view('livewire.forms.login-form');
    }
}
