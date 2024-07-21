<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
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
     * Get the parent subcategory.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Get the subcategories for category.
     */
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
