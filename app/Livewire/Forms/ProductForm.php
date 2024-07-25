<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Component;

class ProductForm extends Component
{
    public ?Product $product;

    public $quantity = 0;

    public function updatedQuantity(): void
    {
        if ($this->product->managed_stock && $this->quantity > $this->product->stock_quantity) {
            $this->quantity = $this->product->stock_quantity;
        }
    }

    public function mount(Product $product): void
    {
        $this->product = $product;

        $this->fill(['quantity' => $this->product->managed_stock && $product->is_in_stock || ! $this->product->managed_stock ? 1 : 0]);
    }

    public function render(): View
    {
        return view('livewire.forms.product-form');
    }

    public function increment(): void
    {
        if ($this->product->managed_stock && $this->quantity >= $this->product->stock_quantity) {
            return;
        }

        $this->quantity += 1;
    }

    public function decrement(): void
    {
        if ($this->quantity <= 1) {
            return;
        }

        $this->quantity -= 1;
    }

    public function submit(): void
    {
        $items = collect(Session::get('cart.items', []));

        if ($items->where('productId', $this->product->id)->isNotEmpty()) {
            $items = $items->map(function ($item) {
                if ($item['productId'] === $this->product->id) {
                    $item['quantity'] += $this->quantity;
                    $item['amount'] = $item['quantity'] * $this->product->price;
                }

                return $item;
            });
        } else {
            $items->push([
                'productId' => $this->product->id,
                'slug' => $this->product->slug,
                'name' => $this->product->name,
                'price' => $this->product->price,
                'amount' => $this->quantity * $this->product->price,
                'quantity' => $this->quantity,
                'image' => $this->product->image->url,
            ]);
        }

        Session::put('cart.items', $items->toArray());

        $this->dispatch('cart.updated');

        $this->dispatch('alert', ['message' => __('Product ":name" added to cart.', ['name' => $this->product->name])]);
    }
}
