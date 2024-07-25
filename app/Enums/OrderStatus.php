<?php

namespace App\Enums;

enum OrderStatus: string
{
    case UNPAID = 'unpaid';
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
}
