<?php

namespace App\Livewire\Tables;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductsTableRow extends Component
{
    public ?Product $product;

    public function render(): View
    {
        return view('livewire.tables.products-table-row');
    }

    public function delete(): void
    {
        $this->product->delete();

        $this->dispatch('admin.product.deleted');
    }
}
