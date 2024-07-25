<?php

namespace App\Livewire\Forms;

use App\Enums\AttachmentType;
use App\Enums\ProductStockStatus;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class EditProductForm extends Component
{
    use WithFileUploads;

    public Product $product;

    #[Validate('required|string', as: 'product name')]
    public $name;

    #[Validate('required|string', as: 'SKU')]
    public $sku;

    #[Validate('required|string', as: 'product description')]
    public $description;

    #[Validate('required|decimal:0', as: 'price')]
    public $price;

    #[Validate('required|boolean', as: 'managed stock')]
    public $managed_stock;

    #[Validate('required_if:managed_stock,1', message: 'The stock quantity field is required when managed stock is enabled.')]
    #[Validate('integer', as: 'stock quantity')]
    public $stock_quantity;

    #[Validate]
    public $stock_status;

    #[Validate('required|boolean', as: 'featured')]
    public $featured;

    #[Validate('nullable|image|mimes:png,jpg|max:12288|dimensions:ratio=1/1')]
    public ?TemporaryUploadedFile $image = null;

    #[Validate('nullable|integer|exists:categories,id', as: 'category')]
    public $category_id;

    #[Validate('nullable|integer|exists:categories,id', as: 'subcategory')]
    public $subcategory_id;

    public $categories;

    public $subcategories;

    public function mount(Product $product): void
    {
        $this->product = $product;

        $this->fill([
            'name' => $this->product->name,
            'sku' => $this->product->sku,
            'description' => $this->product->description,
            'price' => $this->product->price,
            'managed_stock' => $this->product->managed_stock,
            'stock_quantity' => $this->product->stock_quantity,
            'stock_status' => $this->product->stock_status,
            'featured' => $this->product->featured,
            'category_id' => $this->product->category_id,
            'subcategory_id' => $this->product->subcategory_id,
        ]);

        $this->categories = Category::all(['id', 'name']);
        $this->subcategories = Category::whereParentId($this->category_id)->get(['id', 'name']);
    }

    #[Computed]
    public function productStockStatuses(): array
    {
        return [
            ProductStockStatus::IN_STOCK->value => __('In Stock'),
            ProductStockStatus::OUT_OF_STOCK->value => __('Out of Stock'),
        ];
    }

    public function updatedStockQuantity(): void
    {
        if (! $this->managed_stock) {
            return;
        }

        $this->stock_status = $this->stock_quantity > 0 ? ProductStockStatus::IN_STOCK : ProductStockStatus::OUT_OF_STOCK;
    }

    public function updatedManagedStock(): void
    {
        $this->managed_stock = boolval($this->managed_stock);

        if (! $this->managed_stock) {
            $this->stock_quantity = 0;

            return;
        }

        $this->stock_status = $this->stock_quantity > 0 ? ProductStockStatus::IN_STOCK : ProductStockStatus::OUT_OF_STOCK;
    }

    public function updatedCategoryId(): void
    {
        if (! $this->category_id) {
            $this->reset('category_id');
        }

        $this->reset('subcategory_id');

        $this->subcategories = Category::whereParentId($this->category_id)->get(['id', 'name']);
    }

    public function updatedSubcategoryId(): void
    {
        if (! $this->subcategory_id) {
            $this->reset('subcategory_id');
        }
    }

    public function render(): View
    {
        return view('livewire.forms.edit-product-form');
    }

    public function submit(): void
    {
        $this->product->update($this->except(['image']));

        if ($this->image && $path = $this->image->storePublicly('images', config('filesystems.default'))) {
            $this->product->image->update([
                'path' => $path,
                'mime_type' => $this->image->getMimeType(),
                'type' => AttachmentType::PRODUCT_IMAGE,
                'disk' => config('filesystems.default'),
            ]);

            $this->reset('image');
        }

        $this->dispatch('alert', ['message' => __('Product updated successfully.')]);
    }

    public function clearImage(): void
    {
        $this->reset('image');
    }
}
