<?php

namespace App\Modules\Orders\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Orders\Models\Order;
use App\Modules\Orders\Models\OrderWarehouse;
use App\Modules\Orders\Models\OrderStatus;

use Response;

class OrdersAjaxController extends Controller
{

    public function __construct() {
        //
    }

    public function ajaxOrderSubmit(Request $Request) {
        if($Request->isMethod('POST')) {
            
        }
    }

    public function getOrderChildWareHouse(Request $Request) {
        if($Request->isMethod('GET') && !empty($Request->warehouse_id)) {
            
            $OrderWarehouse = new OrderWarehouse();
            $ChildOrderWarehouse = $OrderWarehouse::where('deleted_at_int', '!=', 0)->where('parent_id', $Request->warehouse_id)->get();

            return Response::json(['status' => true, 'ChildOrderWarehouse' => $ChildOrderWarehouse]);

        } else {

        }
    }
}
