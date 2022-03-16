<?php

namespace App\Modules\Customers\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Customers\Models\Customer;
use App\Modules\Customers\Models\Company;

class CustomersController extends Controller
{

    public function __construct() {
        //
    }

    public function actionCustomersIndex(Request $Request) {
        if (view()->exists('customers.customers_index')) {

            $Customer = new Customer();
            $CustomersList = $Customer::where('deleted_at_int', '!=', 0)->get();

            $Company = new Company();
            $CompanyList = $Company::where('deleted_at_int', '!=', 0)->get();

            $data = [
                'customers_list' => $CustomersList,
                'company_list' => $CompanyList,
            ];

            return view('customers.customers_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionCustomersAdd() {
        if (view()->exists('customers.customers_add')) {

            $data = [];

            return view('customers.customers_add', $data);
        } else {
            abort('404');
        }
    }

    public function actionCustomersEdit(Request $Request) {
        if (view()->exists('customers.customers_edit')) {

            $data = [];

            return view('customers.customers_edit', $data);
        } else {
            abort('404');
        }
    }

    public function actionCustomersView(Request $Request) {
        if (view()->exists('customers.customers_view')) {

            $Customer = new Customer();
            $CustomerData = $Customer::find($Request->customer_id);

            $Company = new Company();
            $CompanyData = $Company::where('customer_id', $Request->customer_id)->where('deleted_at_int', '!=', 0)->get();

            $data = [
                'customer_data' => $CustomerData,
                'company_data' => $CompanyData,
            ];

            return view('customers.customers_view', $data);
        } else {
            abort('404');
        }
    }

    public function actionCompanyView(Request $Request) {
        if (view()->exists('customers.company_view')) {

            $Company = new Company();
            $CompanyData = $Company::find($Request->company_id);

            $data = [
                'company_data' => $CompanyData,
            ];

            return view('customers.company_view', $data);
        } else {
            abort('404');
        }
    }
}
