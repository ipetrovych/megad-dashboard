<?php

namespace App\Http\Controllers;

use App\Models\Light;
use App\Services\MegaD;
use Illuminate\Http\Request;

use App\Http\Requests;

class MegaDController extends Controller
{
    public function index(Request $request)
    {
        $port = $request->get('pt');
        $mode = $request->get('m');
        $temperature = $request->get('at');
        $adc_value = $request->get('v');
        $dir = $request->get('dir');

        $megad = new MegaD();

        return $megad->process($port, $mode, $temperature, $adc_value, $dir);
    }

    public function emulate()
    {
        return 'OFF/0;OFF/0;ON/0;OFF/0;OFF/0;OFF/0;OFF/0;OFF;OFF;OFF;OFF;OFF;OFF;OFF;282;298';
    }

    public function toggleLight($id)
    {
        $megad = new MegaD();

        $light = Light::find($id);

        if ($light != null)
        {
            return $megad->setPortState($light->port, 2);
        }
    }
}