<?php

namespace App\Livewire\Forms;

use App\Enums\AttachmentType;
use App\Enums\ProductStockStatus;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class CreateProductForm extends Component
{
    use WithFileUploads;

    #[Validate('required|string', as: 'product name')]
    public $name;

    #[Validate('required|string', as: 'SKU')]
    public $sku;

    #[Validate('required|string', as: 'product description')]
    public $description;

    #[Validate('required|decimal:0', as: 'price')]
    public $price;

    #[Validate('required|boolean', as: 'managed stock')]
    public $managed_stock = false;

    #[Validate('required_if:managed_stock,1', message: 'The stock quantity field is required when managed stock is enabled.')]
    #[Validate('integer', as: 'stock quantity')]
    public $stock_quantity = 0;

    #[Validate]
    public $stock_status = ProductStockStatus::IN_STOCK;

    #[Validate('required|boolean', as: 'featured')]
    public $featured = false;

    #[Validate('required|image|mimes:png,jpg|max:12288|dimensions:ratio=1/1')]
    public ?TemporaryUploadedFile $image = null;

    #[Validate('nullable|integer|exists:categories,id', as: 'category')]
    public $category_id;

    #[Validate('nullable|integer|exists:categories,id', as: 'subcategory')]
    public $subcategory_id;

    public $categories;

    public $subcategories;

    public function mount(): void
    {
        $this->categories = Category::all(['id', 'name']);
        $this->subcategories = collect();
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
        return view('livewire.forms.create-product-form');
    }

    public function rules(): array
    {
        return [
            'stock_status' => ['required_if:managed_stock,0', Rule::enum(ProductStockStatus::class)],
        ];
    }

    public function submit(): void
    {
        $product = Product::create($this->except('image'));

        if ($path = $this->image->storePublicly('images', config('filesystems.default'))) {
            $product->image()->create([
                'path' => $path,
                'mime_type' => $this->image->getMimeType(),
                'type' => AttachmentType::PRODUCT_IMAGE,
                'disk' => config('filesystems.default'),
            ]);
        }

        $this->redirect(route('products.edit', compact('product')));
    }
}
