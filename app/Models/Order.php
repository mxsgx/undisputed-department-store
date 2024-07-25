<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_note',
        'customer_ip_address',
        'customer_user_agent',
        'subtotal',
        'total',
        'status',
        'billing',
        'shipping',
        'items',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => OrderStatus::class,
            'billing' => 'json',
            'shipping' => 'json',
            'items' => 'json',
        ];
    }
}
