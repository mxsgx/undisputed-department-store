<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Component;

class CartForm extends Component
{
    public $items = [];

    public function mount(): void
    {
        $this->fill([
            'items' => collect(Session::get('cart.items', [])),
        ]);
    }

    public function render(): View
    {
        return view('livewire.forms.cart-form');
    }

    public function remove($id): void
    {
        $this->items = $this->items->reject(function ($item) use ($id) {
            return $item['productId'] === $id;
        });

        Session::put('cart.items', $this->items->toArray());

        $this->dispatch('cart.updated');
    }
}
