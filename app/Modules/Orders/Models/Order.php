<?php

namespace App\Modules\Orders\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "new_orders";

    protected $fillable = ['status'];

    public function companyData() {
        return $this->belongsTo('App\Modules\Customers\Models\Company', 'company_id', 'id');
    }

    public function orderStatus() {
        return $this->belongsTo('App\Modules\Orders\Models\OrderStatus', 'status', 'id');
    }

    public function orderWarehouse() {
        return $this->belongsTo('App\Modules\Orders\Models\OrderWarehouse', 'warehouse_id', 'id');
    }

    public function orderChildWarehouse() {
        return $this->belongsTo('App\Modules\Orders\Models\OrderWarehouse', 'warehouse_child_id', 'id');
    }
}
