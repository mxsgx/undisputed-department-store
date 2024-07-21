<?php

namespace App\Livewire\Tables;

use App\Models\Category;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoriesTableRow extends Component
{
    public ?Category $category;

    #[Validate]
    public $name;

    #[Validate]
    public $slug;

    public function mount(Category $category): void
    {
        $this->category = $category;

        $this->fill([
            'name' => $category->name,
            'slug' => $category->slug,
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'slug' => 'required|string|unique:categories,slug,'.$this->category->id,
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Please provide the :attribute.',
            'unique' => 'The :attribute already used.',
        ];
    }

    public function validationAttributes(): array
    {
        return [
            'name' => 'category name',
            'slug' => 'category slug',
        ];
    }

    public function render(): View
    {
        return view('livewire.tables.categories-table-row');
    }

    public function update(): void
    {
        $this->category->update($this->all());

        $this->dispatch('admin.category.updated');
    }

    public function delete(): void
    {
        $this->category->delete();

        $this->dispatch('admin.category.deleted');
    }
}
