<?php

namespace App\Livewire\Forms;

use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RequestResetPasswordForm extends Component
{
    #[Validate('required|email', as: 'email address')]
    public $email = '';

    public function render(): View
    {
        return view('livewire.forms.request-reset-password-form');
    }
}
