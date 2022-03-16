<?php

namespace App\Modules\Orders\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderWarehouse extends Model
{
    use HasFactory;

    protected $table = "new_order_warehouses";
}
