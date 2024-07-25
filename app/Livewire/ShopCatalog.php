<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShopCatalog extends Component
{
    use WithPagination;

    public $search = '';

    public $selectedCategories = [];

    public $selectedSubcategories = [];

    public $categories;

    public function mount(): void
    {
        $this->categories = Category::whereParentId(null)->get();
    }

    public function render(): View
    {
        $query = Product::query();

        $query->where('name', 'LIKE', '%'.$this->search.'%');

        if (! empty($this->selectedCategories)) {
            $query->whereIn('category_id', $this->selectedCategories);
        }

        if (! empty($this->selectedSubcategories)) {
            $query->whereIn('subcategory_id', $this->selectedSubcategories, boolean: ! empty($this->selectedCategories) ? 'or' : 'and');
        }

        return view('livewire.shop-catalog', [
            'products' => $query->paginate(12),
        ]);
    }
}
