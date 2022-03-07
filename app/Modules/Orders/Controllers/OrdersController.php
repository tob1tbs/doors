<?php

namespace App\Modules\Orders\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Orders\Models\Order;

class OrdersController extends Controller
{

    public function __construct() {
        //
    }

    public function actionOrdersIndex() {
        if (view()->exists('orders.orders_index')) {

            $data = [];

            return view('orders.orders_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionOrdersWarehouse() {
        if (view()->exists('orders.orders_warehouse')) {

            $data = [];

            return view('orders.orders_warehouse', $data);
        } else {
            abort('404');
        }
    }
}
