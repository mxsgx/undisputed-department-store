<?php

namespace App\Enums;

enum ProductStockStatus: string
{
    case IN_STOCK = 'in-stock';
    case OUT_OF_STOCK = 'out-of-stock';
}
