<?php

namespace App\Models;

use App\Enums\AttachmentType;
use App\Enums\ProductStockStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use NumberFormatter;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sku',
        'slug',
        'featured',
        'description',
        'price',
        'managed_stock',
        'stock_quantity',
        'stock_status',
        'purchase_note',
    ];

    /**
     * Bootstrap the model and its traits.
     */
    public static function boot(): void
    {
        parent::boot();

        self::creating(function (self $model) {
            if (is_null($model->name) || empty($model->name)) {
                return;
            }

            if (is_null($model->slug) || empty($model->slug)) {
                $model->slug = str($model->name)->slug('-');
            }

            $usedSlugNumber = $model->whereName($model->name)->count();

            if ($usedSlugNumber > 0) {
                $model->slug = $model->slug.'-'.($usedSlugNumber + 1);
            }
        });
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'featured' => 'boolean',
            'price' => 'decimal:0',
            'managed_stock' => 'boolean',
            'stock_status' => ProductStockStatus::class,
        ];
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'attachable')
            ->where('type', AttachmentType::PRODUCT_IMAGE);
    }

    public function gallery(): MorphMany
    {
        return $this->morphMany(Attachment::class, 'attachable')
            ->where('type', AttachmentType::PRODUCT_IMAGE_GALLERY);
    }

    public function getStockStatusNameAttribute(): string
    {
        return match ($this->stock_status) {
            ProductStockStatus::IN_STOCK => 'In Stock',
            ProductStockStatus::OUT_OF_STOCK => 'Out of Stock',
        };
    }

    public function getFormattedPriceAttribute(): string
    {
        return numfmt_format_currency(numfmt_create('id_ID', NumberFormatter::CURRENCY), $this->price, 'IDR');
    }
}
