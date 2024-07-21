<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCategoryForm extends Component
{
    #[Validate('required', message: 'Please provide the category name')]
    #[Validate('min:1', message: 'The category name must be at least 1 character')]
    public $name = '';

    #[Validate('nullable')]
    #[Validate('unique:categories,slug', message: 'The category slug already used.')]
    #[Validate('regex:/^([0-9a-zA-Z\-]+)$/', message: 'The category slug can only contain alphanumeric characters and dashes.')]
    public $slug = null;

    #[Validate('nullable')]
    #[Validate('integer', message: 'The selected category parent not valid.')]
    #[Validate('exists:categories,id', message: 'The selected category parent does not exist in database.')]
    public $parent_id = null;

    public function updatedParentId($value): void
    {
        $this->parent_id = empty($value) ? null : $value;
    }

    public function render(): View
    {
        return view('livewire.forms.create-category-form', [
            'parent_categories' => Category::whereNull('parent_id')->orderBy('name')->get(),
        ]);
    }

    public function submit(): void
    {
        Category::create($this->all());

        $this->name = null;
        $this->slug = null;
        $this->parent_id = null;

        $this->dispatch('admin.category.created');
    }
}
