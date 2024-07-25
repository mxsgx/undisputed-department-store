<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CheckoutForm extends Component
{
    public $items = [];

    #[Validate('required|string')]
    public $first_name;

    #[Validate('required|string')]
    public $last_name;

    #[Validate('required|string')]
    public $phone_number;

    #[Validate('required|email')]
    public $email;

    #[Validate('required|string')]
    public $country;

    #[Validate('required|string')]
    public $state;

    #[Validate('required|string')]
    public $city;

    #[Validate('required|string')]
    public $subdistrict;

    #[Validate('required|string')]
    public $street;

    #[Validate('required|integer')]
    public $postal_code;

    public function mount(): void
    {
        $this->fill([
            'items' => collect(Session::get('cart.items', [])),
        ]);
    }

    public function render(): View
    {
        return view('livewire.forms.checkout-form');
    }

    public function placeOrder(): void
    {
        $order = Order::create([
            'customer_note' => '',
            'customer_ip_address' => request()->ip(),
            'customer_user_agent' => request()->userAgent(),
            'subtotal' => $this->items->sum('amount'),
            'total' => $this->items->sum('amount'),
            'billing' => $this->except('items'),
            'shipping' => [],
            'items' => $this->items->toArray(),
        ]);

        Session::put('cart.items', []);

        $this->fill([
            'items' => collect(Session::get('cart.items', [])),
        ]);

        $this->dispatch('cart.updated');

        $this->dispatch('alert', ['message' => __('Order placed successfully. Your order ID: #:orderId', ['orderId' => $order->id])]);
    }
}
