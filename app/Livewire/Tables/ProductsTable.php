<?php

namespace App\Livewire\Tables;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function render(): View
    {
        return view('livewire.tables.products-table', [
            'products' => Product::where('name', 'LIKE', "%{$this->search}%")->paginate()->onEachSide(2),
        ]);
    }

    #[On('admin.product.deleted')]
    public function handleCategoryDeletedEvent()
    {
        //
    }
}
