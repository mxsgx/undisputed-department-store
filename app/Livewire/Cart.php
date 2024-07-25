<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{
    public $count = 0;

    public function mount(): void
    {
        $this->count = count(Session::get('cart.items', []));
    }

    public function render(): View
    {
        return view('livewire.cart');
    }

    #[On('cart.updated')]
    public function handleCartUpdatedEvent(): void
    {
        $this->count = count(Session::get('cart.items', []));
    }
}
