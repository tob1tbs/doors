<?php

namespace App\Modules\Finance\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Finance\Models\Finance;

class FinanceController extends Controller
{

    public function __construct() {
        //
    }

    public function actionFinanceIndex() {
        if (view()->exists('finance.finance_index')) {

            $data = [];

            return view('finance.finance_index', $data);
        } else {
            abort('404');
        }
    }


}
