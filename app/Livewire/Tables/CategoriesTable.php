<?php

namespace App\Livewire\Tables;

use App\Models\Category;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesTable extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function render(): View
    {
        return view('livewire.tables.categories-table', [
            'categories' => Category::where('name', 'LIKE', "%{$this->search}%")->paginate()->onEachSide(2),
        ]);
    }

    #[On('admin.category.created')]
    public function handleCategoryCreatedEvent()
    {
        //
    }

    #[On('admin.category.updated')]
    public function handleCategoryUpdatedEvent()
    {
        //
    }

    #[On('admin.category.deleted')]
    public function handleCategoryDeletedEvent(): void
    {
        //
    }
}
