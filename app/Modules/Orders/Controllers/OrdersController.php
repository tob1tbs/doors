<?php

namespace App\Modules\Orders\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Orders\Models\Order;
use App\Modules\Orders\Models\OrderWarehouse;
use App\Modules\Orders\Models\OrderStatus;
use App\Modules\Orders\Models\OrderLog;

class OrdersController extends Controller
{

    public function __construct() {
        //
    }

    public function actionOrdersIndex() {
        if (view()->exists('orders.orders_index')) {

            $Order = new Order();
            $OrderList = $Order::all();

            $OrderStatus = new OrderStatus();
            $OrderStatusList = $OrderStatus::where('deleted_at_int', '!=', 0)->get();

            $data = [
                'order_list' => $OrderList,
                'order_status_list' => $OrderStatusList,
            ];

            return view('orders.orders_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionOrdersAdd() {
        if (view()->exists('orders.orders_add')) {

            $data = [];

            return view('orders.orders_add', $data);
        } else {
            abort('404');
        }
    }

    public function actionOrdersWarehouse() {
        if (view()->exists('orders.orders_warehouse')) {

            $OrderWarehouse = new OrderWarehouse();
            $OrderWarehouseData = $OrderWarehouse::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            $WarehouseList = [];

            foreach($OrderWarehouseData as $OrderWarehouseItem) {
                if($OrderWarehouseItem->parent_id == 0) {
                    $WarehouseList[$OrderWarehouseItem->id] = [
                        'id' => $OrderWarehouseItem->id,
                        'name' => $OrderWarehouseItem->name,
                        'childs' => [],
                    ];
                }

                foreach($WarehouseList as $Key => $WarehousItem) {
                    if($Key == $OrderWarehouseItem->parent_id) {
                        $WarehouseList[$Key]['childs'][] = [
                            'id' => $OrderWarehouseItem->id,
                            'name' => $OrderWarehouseItem->name,
                        ];
                    }
                }
            }

            $data = [
                'warehouse_list' => $WarehouseList,
            ];

            return view('orders.orders_warehouse', $data);
        } else {
            abort('404');
        }
    }

    public function actionOrdersView(Request $Request) {
        if (view()->exists('orders.orders_view')) {

            $Order = new Order();
            $OrderData = $Order::findOrFail($Request->order_id);

            $OrderLog = new OrderLog();

            if($OrderData->status == 1) {
                $OrderData->update(['status' => 2]);

                $OrderLogData = [
                    'key' => 'order_status',
                    'title' => 'შეკვეთის გახსნა',
                    'value' => 'შეკვეთა გახნა მიტო ჩიხლაძე',
                ];

                $OrderLog->order_id = $Request->order_id;
                $OrderLog->data = json_encode($OrderLogData);
                $OrderLog->save();
            }

            $OrderLogData = $OrderLog::where('order_id', $Request->order_id)->where('deleted_at_int', '!=', 0)->get();

            $OrderStatus = new OrderStatus();
            $OrderStatusList = $OrderStatus::where('deleted_at_int', '!=', 0)->get();

            $OrderWarehouse = new OrderWarehouse();
            $OrderWarehouseList = $OrderWarehouse::where('deleted_at_int', '!=', 0)->where('parent_id', 0)->get();

            $data = [
                'order_data' => $OrderData,
                'order_log_data' => $OrderLogData,
                'order_status_list' => $OrderStatusList,
                'warehouse_list' => $OrderWarehouseList,
            ];

            return view('orders.orders_view', $data);
        } else {
            abort('404');
        }
    }
}
