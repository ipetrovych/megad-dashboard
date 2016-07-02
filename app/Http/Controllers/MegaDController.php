<?php

namespace App\Http\Controllers;

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

        $megad->process($port, $mode, $temperature, $adc_value, $dir);

        dd('7:2');
    }
}
