<?php

namespace App\Livewire\Forms;

use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class OrderTrackingForm extends Component
{
    #[Validate('required', as: 'order id')]
    public $order_id = '';

    public function render(): View
    {
        return view('livewire.forms.order-tracking-form');
    }
}
