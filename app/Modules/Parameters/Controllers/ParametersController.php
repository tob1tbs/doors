<?php

namespace App\Modules\Parameters\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Parameters\Models\Parameter;
use App\Modules\Parameters\Models\ParameterInfo;
use App\Modules\Parameters\Models\ParameterSocial;
use App\Modules\Parameters\Models\ParameterPlugin;
use App\Modules\Parameters\Models\ParameterPaymentCategory;
use App\Modules\Parameters\Models\ParameterPayment;
use App\Modules\Parameters\Models\ParameterTranslate;

class ParametersController extends Controller
{

    public function __construct() {
        //
    }

    public function actionWebParametersIndex() {
        if (view()->exists('parameters.parameters_index')) {

            $Parameter = new Parameter();
            $ParameterList = $Parameter::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            $ParameterInfo = new ParameterInfo();
            $ParameterInfoList = $ParameterInfo::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            $ParameterSocial = new ParameterSocial();
            $ParameterSocialList = $ParameterSocial::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            $ParameterPlugin = new ParameterPlugin();
            $ParameterPluginList = $ParameterPlugin::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            $data = [
                'parameter_list' => $ParameterList,
                'parameter_info_list' => $ParameterInfoList,
                'parameter_social_list' => $ParameterSocialList,
                'parameter_plugin_list' => $ParameterPluginList,
            ];

            return view('parameters.parameters_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionParametersTranslate(Request $Request) {
        if (view()->exists('parameters.parameters_translate')) {

            $ParameterTranslate = new ParameterTranslate();
            $ParameterTranslateList = $ParameterTranslate::where('deleted_at_int', '!=', 0)->get();

            $data = [
                'parameters_translate_list' => $ParameterTranslateList,
            ];

            return view('parameters.parameters_translate', $data);
        } else {
            abort('404');
        }
    }
}
